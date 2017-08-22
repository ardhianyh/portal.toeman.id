<?php

class Product_Model extends CI_Model{

  public function __construct(){
      parent::__construct();
      $this->load->database();
  }

  public function GetProduct(){
      $query = $this ->db->get('product');
      return $query->result_array();
}
  public function InsertProduct($data_product){
    $this->load->helper('url');
     $this->db->insert('product', $data_product);
  }

  public function GetIdProduct($id = FALSE){
      $query = $this ->db->get_where('product', array('id' => $id));
      return $query->row_array();
}

public function UpdateProduct($id){
$this->load->helper('url');

$data = array(
'nama' => $this->input->post('nama'),
'deskripsi' => $this->input->post('deskripsi'),
'harga' => $this->input->post('harga'),
);

$this ->db->where('id', $id);
return $this->db->update('product', $data);
}

public function DeleteProduct($id){
  return $this->db->delete('product', array('id' => $id));
}

}
