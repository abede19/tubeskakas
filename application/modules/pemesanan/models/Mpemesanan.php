<?php

class Mpemesanan extends CI_model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function pemesanan(){
		$this->db->select('*');
		$this->db->from('tabel_pemesanan');
		return $this->db->get();
	}
	public function ambilData($id_pemesanan){
		$this->db->select('*');
		$this->db->where('id_pemesanan',$id_pemesanan);
		$this->db->from('tabel_pemesanan');
		return $this->db->get();
	}
	public function inputData(){
		$data['nama_pemesanan']	=	$this->input->post('nama');
		$data['destinasi']		=	$this->input->post('destinasi');
		$data['jenis_pemesanan']	=	$this->input->post('jenis_pemesanan');
		$data['daerah']		= $this->input->post('daerah');
		$data['kota']		=	$this->input->post('kota');
		$data['total']		=	$this->input->post('total');
		$data['status']		=	$this->input->post('status');

		$this->db->insert('tabel_pemesanan',$data);
		return true;
	}
	public function updateData(){
		$data['id_pemesanan']	=	$this->input->post('id_pemesanan');
		$data['nama_pemesanan']	=	$this->input->post('nama');
		$data['destinasi']		=	$this->input->post('destinasi');
		$data['jenis_pemesanan']	=	$this->input->post('jenis_pemesanan');
		$data['daerah']		= $this->input->post('daerah');
		$data['kota']		=	$this->input->post('kota');
		$data['total']		=	$this->input->post('total');
		$data['status']		=	$this->input->post('status');

		$this->db->where('id_pemesanan',$data['id_pemesanan']);
		$this->db->update('tabel_pemesanan',$data);
		return true;
	}
}