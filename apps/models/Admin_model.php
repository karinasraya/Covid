<?php
class admin_model extends CI_Model
{
    private $_table = "user";

    public function __construct(){
        parent::__construct();
        $this->load->helper('cookie'); 
    }

    public function doLogin(){
		$post = $this->input->post();
        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();
        if($user){
            $verifyPassword = password_verify($post["password"], $user->password);
            if($verifyPassword){ 
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->username);
                $token=md5(uniqid(rand(), true));
                $this->_updateToken($token,$user->username);
                $cookie=array(
                    'name'   => 'login_session',
                    'value'  => $token,                            
                    'expire' => '300',                                                                                   
                );
                $this->input->set_cookie($cookie);
                return true;
            }
        }
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($username){
        $this->last_login=date("Y-m-d H:i:s");
        $this->db->update($this->_table, $this, array('username' => $username));
    }

    private function _updateToken($token,$username){
        $this->token=$token;
        $this->db->update($this->_table, $this, array('username' => $username));
    }

    public function loginCheck(){
        $token=$this->input->cookie('login_session',true);
        if(!$token){
            redirect(site_url('login'));
            return false;
        }
        $query=$this->db->get_where($this->_table,array('token'=>$token));
        if(!$query){
            redirect(site_url('login'));
            return false;
        }
        return true;
    } 

}