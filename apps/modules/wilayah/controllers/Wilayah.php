<?php

defined('BASEPATH') or exit('No direct script access allowed');

 
class Wilayah extends MY_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('Wilayah_qry');
                $this->load->helper('url');
  }
	function index(){
		$data['rs_rujukan'] = $this->Wilayah_qry->tampil_data()->result();
		$this->load->view('index_wilayah',$data);
		$this->template
		->title("Wilayah")
		->set_layout('main')
		->build('index_wilayah', $this->data);
	}
  protected $data = array();
  protected $countries = array();
}
