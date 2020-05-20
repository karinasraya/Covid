<?php

defined('BASEPATH') or exit('No direct script access allowed');

 
class admin_wilayah extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('Wilayah_qry');
        $this->load->helper('url');
	}
	  
	function index(){
        $data['rs_rujukan'] = $this->Wilayah_qry->tampil_data()->result();
        // var_dump($data['rs_rujukan']);
		$this->template
		->title("Wilayah")
		->set_layout('main_admin')
		->build('admin/admin_index_wilayah', $data);
	}

	function getRSRujukan(){
		$data = $this->Wilayah_qry->query_tampil_data();
		echo json_encode(array("data" => $data));
	}

	public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data RS'

        );

        $this->load->view('tambah_rs', $data);
    }

    public function simpan()
    {
        $data = array(

            'provinsi'     => $this->input->post("provinsi"),
            'nama_rs'      => $this->input->post("nama_rs"),
            'alamat_rs'    => $this->input->post("alamat_rs"),

        );

        $this->Wilayah_qry->simpan($data);
        //redirect
        redirect('admin/rs_rujukan/');

    }

    public function edit($id)
    {
        $id = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data RS',
            'data_rs' 	=> $this->wilayah_qry->edit($id)

        );

        $this->load->view('edit_rs', $data);
    }

    public function update()
    {
        $id = $this->input->post("nomor");
        $data = array(
            'provinsi'     => $this->input->post("provinsi"),
            'nama_rs'      => $this->input->post("nama_rs"),
            'alamat_rs'    => $this->input->post("alamat_rs"),
        );
        $this->Wilayah_qry->update($data, $id);
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');
        //redirect
        redirect('admin/rs_rujukan/');
    }

    public function hapus($id)
    {
        // $id = $this->input->get("id");

        $this->Wilayah_qry->hapus($id);

        //redirect
        redirect('admin/rs_rujukan/');

    }

  protected $data = array();
  protected $countries = array();
}
