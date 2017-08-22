<?php
class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('form_upload');
    }

    function do_upload() {
        // setting konfigurasi upload
        $config['upload_path'] = './asset/img/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $result = $this->upload->data();

        }
    }
