<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->model('karyawan_model');
			$this->load->helper('url_helper');
	}

	public function index(){
		$data['karyawan']= $this->karyawan_model->GetKaryawan();
		$this->load->view('dashboard/karyawan', $data);
	}

	public function detail($id)
	{
		$data['k'] = $this->karyawan_model->GetIdKaryawan($id);
		$this->load->view('karyawan/detail', $data);
	}

public function insert(){
	$this->load->helper('form');
  $this->load->library('form_validation');

	$this->form_validation->set_rules('nik', 'NIK', 'required');
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	$this->form_validation->set_rules('no_hp', 'No HP', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
  $this->form_validation->set_rules('status', 'Status', 'required');

	if($this->form_validation->run() === FALSE){
		$this->session->set_flashdata('info', 'Input Data Gagal');
		$this->load->view('karyawan/insert');
	} else {
		$this->karyawan_model->InsertKaryawan();
		$this->session->set_flashdata('info', 'Input Data Karyawan Berhasil');
		redirect('karyawan');
	}
}
//
public function edit($id){
	$this->load->helper('form');
  $this->load->library('form_validation');

	$this->form_validation->set_rules('nik', 'NIK', 'required');
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	$this->form_validation->set_rules('no_hp', 'No HP', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('status', 'Status', 'required');

	if($this->form_validation->run() === FALSE){
		$this->session->set_flashdata('info', 'Edit Data Gagal');
		$data['k'] = $this->karyawan_model->GetIdKaryawan($id);
		$this->load->view('karyawan/edit', $data);
	} else {
		$this->karyawan_model->UpdateKaryawan($id );
		$this->session->set_flashdata('info', 'Edit Data Berhasil');
		redirect('karyawan');
	}
}

public function delete($id){
	$this->karyawan_model->DeleteKaryawan($id);
	redirect('karyawan');
}

}
