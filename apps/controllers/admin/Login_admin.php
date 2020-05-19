<?php

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->admin_qry->doLogin()) redirect(site_url('admin'));
        }
        // $this->initIndex();
        // $this->template
        //   ->title("Login")
        //   ->set_layout('login')
        //   ->build('index', $this->data);
        $this->load->view("admin/login_page.php");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}