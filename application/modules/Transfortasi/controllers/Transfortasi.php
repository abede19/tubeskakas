<?php

class Transfortasi extends CI_controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mtransfortasi');
	}
	public function nasional(){
		$data['nasional'] = $this->Mtransfortasi->nasional()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('nasional',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function tambahTransfortasiNasional(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('tambahTransfortasiNasional');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function daerah(){
		$data['daerah'] = $this->Mtransfortasi->daerah()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('daerah',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function tambahTransfortasiDaerah(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('tambahTransfortasiDaerah');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function tambahkanTransfortasiNasional(){
		$this->form_validation->set_rules('asal','Asal','required',array('required' => 'Masukkan Asal'));
		$this->form_validation->set_rules('nama','Nama','required',array('required' => 'Masukkan Nama'));
		$this->form_validation->set_rules('tujuan','Tujuan','required',array('required' => 'Masukkan Tujuan'));
		$this->form_validation->set_rules('via','Via','required',array('required' => 'Masukkan Via'));
		$this->form_validation->set_rules('jenis_transfortasi','Jenis_transfortasi','required',array('required' => 'Masukkan Jenis Transfortasi'));
		$this->form_validation->set_rules('harga','Harga','required|is_numeric',array('required' => 'Masukkan Harga','is_numeric' =>'Masukkan Harga'));
		
		if($this->form_validation->run()== 0) {
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('tambahTransfortasiNasional');
			$this->load->view('admin/footer');
			$this->load->view('admin/js');
		}else{
			$this->Mtransfortasi->inputTransfortasiNasional();
			$this->session->set_flashdata('pesanTambah','Tambah Data Berhasil');	
			redirect('Transfortasi/nasional');	
		}
	}
	public function editTransfortasiNasional($id_transfortasi_nasional){
		$data['nasional'] = $this->Mtransfortasi->ambilData($id_transfortasi_nasional)->row();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('editTransfortasiNasional',$data);
			$this->load->view('admin/footer');
			$this->load->view('admin/js');
	}
	public function ubahTransfortasiNasional(){
		$this->Mtransfortasi->updateTransfortasiNasional();
		$this->session->set_flashdata('pesanUbahData','Data Berhasil di Ubah');
		redirect('Transfortasi/nasional');
	}
	public function hapusTransfortasiNasional($id_transfortasi_nasional){
		$this->Mtransfortasi->deleteTrandfortasiNasional($id_transfortasi_nasional);
		$this->session->set_flashdata('pesanHapusData','Data Berhasil di Hapus');
		redirect('Transfortasi/nasional');
	}

	public function tambahkanTransfortasiDaerah(){
		$this->form_validation->set_rules('asal','Asal','required',array('required' => 'Masukkan Asal'));
		$this->form_validation->set_rules('nama','Nama','required',array('required' => 'Masukkan Nama'));
		$this->form_validation->set_rules('tujuan','Tujuan','required',array('required' => 'Masukkan Tujuan'));
		$this->form_validation->set_rules('via','Via','required',array('required' => 'Masukkan Via'));
		$this->form_validation->set_rules('jenis_transfortasi','Jenis_transfortasi','required',array('required' => 'Masukkan Jenis Transfortasi'));
		$this->form_validation->set_rules('harga','Harga','required|is_numeric',array('required' => 'Masukkan Harga','is_numeric' =>'Masukkan Harga'));
		
		if($this->form_validation->run()== 0) {
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('tambahTransfortasiDaerah');
			$this->load->view('admin/footer');
			$this->load->view('admin/js');
		}else{
			$this->Mtransfortasi->inputTransfortasiDaerah();
			$this->session->set_flashdata('pesanTambah','Tambah Data Berhasil');	
			redirect('Transfortasi/daerah');	
		}
	}
	public function editTransfortasiDaerah($id_transfortasi_daerah){
		$data['daerah'] = $this->Mtransfortasi->ambilDataDaerah($id_transfortasi_daerah)->row();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('editTransfortasiDaerah',$data);
			$this->load->view('admin/footer');
			$this->load->view('admin/js');
	}
	public function ubahTransfortasiDaerah(){
		$this->Mtransfortasi->updateTransfortasiDaerah();
		$this->session->set_flashdata('pesanUbah','Ubah Data Berhasil');
		redirect('Transfortasi/daerah');
	}

	public function hapusTransfortasiDaerah($id_transfortasi_daerah){
		$this->Mtransfortasi->deleteTrandfortasiDaerah($id_transfortasi_daerah);
		$this->session->set_flashdata('pesanHapus','Hapus Data Berhasil');
		redirect('Transfortasi/daerah');	
	}
}