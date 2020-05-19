<?php

class admin_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->helper('cookie');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') == 'GET'){
            $this->login_get();
        }
        else if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->login_post();
        }
    }

    public function login_get(){
        $token=$this->input->cookie('login_session',true);
        if(!$token){
            return $this->load->view('admin/login_page');
        }
        $query=$this->db->get_where('user',array('token'=>$token));
        if(!$query){
            return $this->load->view('admin/login_page');
        }
        return redirect(site_url('admin/home'));
    }

    public function login_post(){
        $loginValidation=$this->admin_model->doLogin();
        if(!$loginValidation){
            redirect(site_url('login'));
        }
        else{
            redirect(site_url('admin/home'));
        }
    }

    public function logout()
    {
        delete_cookie('login_session');
        redirect(site_url('login'));
    }
}