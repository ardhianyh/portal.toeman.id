<?php

class Admin_Model extends CI_Model{

  public function __construct(){
      parent::__construct();
      $this->load->database();
  }

      public function GetAdmin(){
          $query = $this ->db->get('admin');
          return $query->result_array();
}

      public function InsertAdmin($data_admin){
        $this->load->helper('url');
         $this->db->insert('admin', $data_admin);
}

      public function GetIdAdmin($id = FALSE){
          $query = $this ->db->get_where('admin', array('id' => $id));
          return $query->row_array();
}

public function UpdateAdmin($id){
  $this->load->helper('url');

  $data = array(
    'username' => $this->input->post('username'),
    'password' => $this->input->post('password'),
    'nama' => $this->input->post('nama'),
    'no_hp' => $this->input->post('no_hp'),
    'email' => $this->input->post('email'),
    'level' => $this->input->post('level'),
   );

   $this ->db->where('id', $id);
   return $this->db->update('admin', $data);
}

public function DeleteAdmin($id){
  return $this->db->delete('admin', array('id' => $id));
}

}
