<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('login_model');

    }

    function index(){
        $this->load->view('login');
    }

		public function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->login_model->cek($username, $password);
			if ($cek->num_rows() == 1) {
				foreach ($cek->result() as $data) {
					$sess_data['id'] = $data->id;
					$sess_data['username'] = $data->username;
					$this->session->set_userdata($sess_data);
				}
				echo "<script>window.alert('Login Berhasil'); window.location.href = '../dashboard';</script>";
			}
			else {
      	$this->session->set_flashdata('action_status',
         '<div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> Username & Password Salah!
          </div>');
				redirect('login', 'refresh');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
}
