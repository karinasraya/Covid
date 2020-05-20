<?php

class Wilayah_qry extends CI_Model {
	function tampil_data(){
		return $this->db->get('rs_rujukan');
	}
	
	function query_tampil_data(){
		$query = $this->db->get('rs_rujukan');
		return $query->result(); 
	}

    public function simpan($data)
    {

        $query = $this->db->insert("rs_rujukan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id)
    {

        $query = $this->db->where("nomor", $id)
                ->get("rs_rujukan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {
        $query = $this->db
            ->where("nomor", $id)
            ->update("rs_rujukan", $data);
        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function hapus($id)
    {
        // $table = array('rs_rujukan');
        // $query = $this->db->where("nomor", $id)->delete($table);
        $query = $this->db->delete('rs_rujukan',array('nomor'=>$id));
        if($query){
            return true;
        }else{
            return false;
        }

    }
}
