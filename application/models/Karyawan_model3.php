<?php

class Karyawan_model extends CI_Model {

	public function __construct(){
		parent::__construct();
      $this->load->database();
	}


	function GetKaryawan(){
		$this->db->order_by("id","asc");
		$query=$this->db->get("karyawan");
		return $query->result_array();
	}

  public function InsertKaryawan(){
    $this->load->helper('url');
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'email' => $this->input->post('email'),
      'status' => $this->input->post('status'),
     );
     return $this->db->insert('karyawan', $data);
  }

  public function GetIdKaryawan($id = FALSE){
      $query = $this ->db->get_where('karyawan', array('id' => $id));
      return $query->row_array();
}

public function UpdateKaryawan($id){
$this->load->helper('url');

$data = array(
'nik' => $this->input->post('nik'),
'nama' => $this->input->post('nama'),
'alamat' => $this->input->post('alamat'),
'no_hp' => $this->input->post('no_hp'),
'email' => $this->input->post('email'),
'status' => $this->input->post('status'),
);

$this ->db->where('id', $id);
return $this->db->update('karyawan', $data);
}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("karyawan");
	}


}
