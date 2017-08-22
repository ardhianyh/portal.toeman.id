<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->model('product_model');
			$this->load->helper('url_helper');
	}

	public function index(){
		$data['product']= $this->product_model->GetProduct();
		$this->load->view('dashboard/product', $data);
	}

	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');

	$this->form_validation->set_rules('nama', 'Product Name', 'required');
	$this->form_validation->set_rules('deskripsi', 'Product Description', 'required');
	$this->form_validation->set_rules('harga', 'Product Price', 'required|integer');
	//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

	if ($this->form_validation->run() == FALSE)
	{
		$this->load->view('product/insert');
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
			$this->load->view('product/insert');
		} else {
			//file berhasil diupload -> lanjutkan ke query INSERT
			// eksekusi query INSERT
			$gambar = $this->upload->data();
			$data_product =	array(
				'nama'			=> set_value('nama'),
				'deskripsi'	=> set_value('deskripsi'),
				'harga'			=> set_value('harga'),
				'gambar'			=> $gambar['file_name']
			);
			$this->product_model->InsertProduct($data_product);
			redirect('product');
		}

	}
}


public function edit($id){
	$this->load->helper('form');
  $this->load->library('form_validation');

	$this->form_validation->set_rules('nama', 'Product Name', 'required');
	$this->form_validation->set_rules('deskripsi', 'Product Description', 'required');
	$this->form_validation->set_rules('harga', 'Product Price', 'required|integer');

	if($this->form_validation->run() === FALSE){
		$this->session->set_flashdata('info', 'Edit Data Gagal');
		$data['p'] = $this->product_model->GetIdProduct($id);
		$this->load->view('product/edit', $data);
	} else {
		$this->product_model->UpdateProduct($id );
		$this->session->set_flashdata('info', 'Edit Data Berhasil');
		redirect('product');
	}
	}

	public function delete($id){
		$this->product_model->DeleteProduct($id);
		redirect('product');
	}
}
