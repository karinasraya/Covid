<?php

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_qry");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->admin_qry->doLogin()) redirect(site_url('admin'));
        }

        // tampilkan halaman login
        //$this->load->view("modules/admin/views/index.php");
        $this->initIndex();
        $this->template
          ->title("login")
          ->set_layout('login')
          ->build('index', $this->data);
    }
    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}