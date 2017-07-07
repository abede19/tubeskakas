<?php

class Mlogin extends CI_model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function masuk(){
		$username = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$data = $this->db->query("SELECT * FROM tabel_login WHERE username='$username' and password='$password' LIMIT 1");

		if($data->num_rows() > 0) {
				$row = $data->row_array();

				$session = array(
					'id_admin' => $row['id_admin'],
					'nama'	=> $row['nama'],
					'username' => $row['username'],
					'password' => $row['password'],
					'logged_in' => TRUE,
					 );
				$this->session->set_userdata($session);
				return;
			}
		}
}