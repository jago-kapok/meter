<?php

class Auth extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('model_user');
 
	}
 
	public function index()
    {
        $this->load->view('templates/aute_header');
        $this->load->view('autentifikasi/login');
        $this->load->view('templates/aute_footer');
    }
 
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array(
			'username' => $username,
			'password' => $password
		);
		
		$user = $this->modeluser->getData($where)->num_rows();
		
		if($user > 0){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
 
			$this->session->set_userdata($data_session);
 
			// redirect(base_url("user"));
			echo 'Sukses';
 
		} else {
			// redirect(base_url("auth"));
			echo 'Gagal';
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}

 