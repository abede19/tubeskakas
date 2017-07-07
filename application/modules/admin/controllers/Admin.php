<?php

class Admin extends CI_controller
{
	public function index(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('admin');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
}