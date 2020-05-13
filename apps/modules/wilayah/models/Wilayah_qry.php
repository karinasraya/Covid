<?php

class Wilayah_qry extends CI_Model {
	function tampil_data(){
		return $this->db->get('rs_rujukan');
	}
}
