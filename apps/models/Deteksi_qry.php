<?php

class Deteksi_qry extends CI_Model {
	function tampil_data(){
		return $this->db->get('deteksi');
	}
	
	function query_tampil_data(){
		$query = $this->db->get('deteksi');
		return $query->result(); 
	}
}
