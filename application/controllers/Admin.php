<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->model('admin_model');
			$this->load->helper('url_helper');
	}

	public function index(){
		$data['admin']= $this->admin_model->GetAdmin();
		$this->load->view('dashboard/admin', $data);
	}

public function detail($id)
{
	$data['a'] = $this->admin_model->GetIdAdmin($id);
	$this->load->view('admin/detail', $data);
}

public function insert(){
$this->load->helper('form');
$this->load->library('form_validation');

$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('nama', 'Nama', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('no_hp', 'No Hp', 'required');
$this->form_validation->set_rules('level', 'Level', 'required');

if ($this->form_validation->run() == FALSE)
{
	$this->load->view('admin/insert');
} else {
	//load uploading file library
	$config['upload_path'] = './asset/img/upload/';
	$config['allowed_types'] = 'jpg|png';
	$config['max_size']	= '300'; //KB
	$config['max_width']  = '2000'; //pixels
	$config['max_height']  = '2000'; //pixels

	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
	{
		//file gagal diupload -> kembali ke form tambah
		$this->load->view('admin/insert');
	} else {
		//file berhasil diupload -> lanjutkan ke query INSERT
		// eksekusi query INSERT
		$gambar = $this->upload->data();
		$data_admin =	array(
			'username'			=> set_value('username'),
			'password'	=> set_value('password'),
			'nama'			=> set_value('nama'),
			'email'			=> set_value('email'),
			'no_hp'			=> set_value('no_hp'),
			'level'			=> set_value('level'),
			'gambar'			=> $gambar['file_name']
		);
		$this->admin_model->InsertAdmin($data_admin);
		redirect('admin');
	}

}
}


public function edit($id){
	$this->load->helper('form');
  $this->load->library('form_validation');

	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('no_hp', 'No HP', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
  $this->form_validation->set_rules('level', 'Level', 'required');

	if($this->form_validation->run() === FALSE){
		$this->session->set_flashdata('info', 'Edit Data Gagal');
		$data['a'] = $this->admin_model->GetIdAdmin($id);
		$this->load->view('admin/edit', $data);
	} else {
		$this->admin_model->UpdateAdmin($id );
		$this->session->set_flashdata('info', 'Edit Data Berhasil');
		redirect('admin');
	}
}

public function delete($id){
	$this->admin_model->DeleteAdmin($id);
	redirect('admin');
}

}
