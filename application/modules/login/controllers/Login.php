<?php

class Login extends CI_controller
{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Mlogin');
	}
	public function index(){
		$this->load->view('admin/header');
		$this->load->view('login');
		$this->load->view('admin/js');
	}
	public function masuk(){
		$this->Mlogin->masuk();
		$masuk = $this->session->userdata('logged_in');
		if ($masuk) {
			redirect('Dashboard/index');
		}else{
			redirect('Login');
		}
		
	}
}