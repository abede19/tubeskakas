<?php

class Pemesanan extends CI_controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('Mpemesanan');
	}
	
	public function index(){
		$data['pemesanan']	= $this->Mpemesanan->pemesanan()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('pemesanan',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function tambahPemesanan(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('tambahPemesanan');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');	

	}
	 public function tambahDataPemesanan(){
		$this->form_validation->set_rules('nama','Nama','required',array('required'=> 'Nama Penginapan Harus di isi'));
		$this->form_validation->set_rules('destinasi','Destinasi','required',array('required'=>'Harap di Isi'));
		$this->form_validation->set_rules('jenis_pemesanan','jenis_pemesanan','required',array('required'=>'Harap di Isi'));
		$this->form_validation->set_rules('daerah','Daerah','required',array('required'=>'Harap di Isi'));
		$this->form_validation->set_rules('kota','Kota','required',array('required'=>'Harap di Isi'));
		$this->form_validation->set_rules('status','status','required',array('required'=>'Harap di Isi'));
		$this->form_validation->set_rules('total','Total','required|is_numeric',array('required'=>'Harap di Isi','is_numeric'=>'Harus Angka'));

		if ($this->form_validation->run()==false) {
			$this->load->view('admin/header.php');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('tambahPemesanan');
			$this->load->view('admin/footer');
			$this->load->view('admin/js');
		}else{
			$this->Mpemesanan->inputData();
			$this->session->set_flashdata('pesanTambah','Data Berhasil di Tambahkan');
			redirect('Pemesanan/index');
		}
	}
	public function editPemesanan($id_pemesanan){
			$data['pemesanan']	= $this->Mpemesanan->ambilData($id_pemesanan)->row();
			$this->load->view('admin/header.php');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('editPemesanan',$data);
			$this->load->view('admin/footer');
			$this->load->view('admin/js');
	}
	public function editData(){
			$this->Mpemesanan->updateData();
			$this->session->set_flashdata('pesanUbah','Ubah Data Berhasil');
			redirect('Pemesanan');
	}
}
