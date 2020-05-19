<?php

defined('BASEPATH') or exit('No direct script access allowed');

 
class admin_hasil_deteksi extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('Deteksi_qry');
                $this->load->helper('url');
	}
	  
	function index(){
		$data['deteksi'] = $this->Deteksi_qry->tampil_data()->result();
		$this->template
		->title("Deteksi")
		->set_layout('main_admin')
		->build('admin/admin_index_deteksi', $this->data);
	}

	function getHasilDeteksi(){
		$data = $this->Deteksi_qry->query_tampil_data();
		echo json_encode(array("data" => $data));
	}

  protected $data = array();
  protected $countries = array();
}
