<?php

class Wilayah_qry extends CI_Model {
	function tampil_data(){
		return $this->db->get('rs_rujukan');
	}
	
	function query_tampil_data(){
		$query = $this->db->get('rs_rujukan');
		return $query->result(); 
	}
}
