<?php

class Mtransfortasi extends CI_model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function nasional(){
		$this->db->select('*');
		$this->db->from('tabel_transfortasi_nasional');
		return $this->db->get();
	}
	public function ambilData($id_transfortasi_nasional){
		$this->db->select('*');
		$this->db->where('id_transfortasi_nasional',$id_transfortasi_nasional);
		$this->db->from('tabel_transfortasi_nasional');
		return $this->db->get();
	}
	public function inputTransfortasiNasional(){
		$data['asal']	= $this->input->post('asal');
		$data['nama']	=	$this->input->post('nama');
		$data['tujuan']	=	$this->input->post('tujuan');
		$data['via']	=	$this->input->post('via');
		$data['jenis_transfortasi']	=	$this->input->post('jenis_transfortasi');
		$data['harga']	=	$this->input->post('harga');

		$this->db->insert('tabel_transfortasi_nasional',$data);
		return;
	}
	public function updateTransfortasiNasional(){
		$data['id_transfortasi_nasional'] = $this->input->post('id_transfortasi_nasional');
		$data['asal'] = $this->input->post('asal');
		$data['nama'] = $this->input->post('nama');
		$data['tujuan']	= $this->input->post('tujuan');
		$data['via']	= $this->input->post('via');
		$data['jenis_transfortasi']	= $this->input->post('jenis_transfortasi');
		$data['harga']	= $this->input->post('harga');

		$this->db->where('id_transfortasi_nasional',$data['id_transfortasi_nasional']);
		$return = $this->db->update('tabel_transfortasi_nasional',$data);
		return $return;
	}
	public function deleteTrandfortasiNasional($id_transfortasi_nasional){
		$this->db->where('id_transfortasi_nasional',$id_transfortasi_nasional);
		$this->db->delete('tabel_transfortasi_nasional');
		return true;
	}

	public function inputTransfortasiDaerah(){
		$data['asal']	= $this->input->post('asal');
		$data['nama']	=	$this->input->post('nama');
		$data['tujuan']	=	$this->input->post('tujuan');
		$data['via']	=	$this->input->post('via');
		$data['jenis_transfortasi']	=	$this->input->post('jenis_transfortasi');
		$data['harga']	=	$this->input->post('harga');

		$return = $this->db->insert('tabel_transfortasi_daerah',$data);
		return $return ;
	}
	public function daerah(){
		$this->db->select('*');
		$this->db->from('tabel_transfortasi_daerah');
		return $this->db->get();
	}
	public function ambilDataDaerah($id_transfortasi_daerah){
		$this->db->select('*');
		$this->db->where('id_transfortasi_daerah',$id_transfortasi_daerah);
		$this->db->from('tabel_transfortasi_daerah');
		return $this->db->get();
	}
	public function updateTransfortasiDaerah(){
		$data['id_transfortasi_daerah'] = $this->input->post('id_transfortasi_daerah');
		$data['asal'] = $this->input->post('asal');
		$data['nama'] = $this->input->post('nama');
		$data['tujuan']	= $this->input->post('tujuan');
		$data['via']	= $this->input->post('via');
		$data['jenis_transfortasi']	= $this->input->post('jenis_transfortasi');
		$data['harga']	= $this->input->post('harga');

		$this->db->where('id_transfortasi_daerah',$data['id_transfortasi_daerah']);
		$return = $this->db->update('tabel_transfortasi_daerah',$data);
		return $return;
	}
	public function deleteTrandfortasiDaerah($id_transfortasi_daerah){
		$this->db->where('id_transfortasi_daerah',$id_transfortasi_daerah);
		$this->db->delete('tabel_transfortasi_daerah');
		return true;
	}
}