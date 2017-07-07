<?php

class Penginapan extends CI_controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mpenginapan');
	}
	public function index(){
		$data['penginapan'] = $this->Mpenginapan->penginapan()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('penginapan',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function tambahPenginapan(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('tambahPenginapan');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');	
	}
	public function masukkanDataPenginapan(){
		$this->form_validation->set_rules('gambar','Gambar','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('nama','Nama','required',array('required' => 'Nama Harus di Input'));
		$this->form_validation->set_rules('fasilitas','Fasilitas','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('lokasi','Lokasi','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('daerah','Daerah','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('kota','Kota','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('jenis_penginapan','jenis_penginapan','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('deskripsi','Deskripsi','required',array('required' => 'Gambar Harus di Input'));
		$this->form_validation->set_rules('harga','Harga','required|is_numeric',array('required' => 'Gambar Harus di Input','is_numeric' => 'Masukkan Harga'));

		if ($this->form_validation->run()==0) {
			$this->load->view('admin/header.php');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('tambahPenginapan');
			$this->load->view('admin/footer');
			$this->load->view('admin/js');	
		}else{
			$data['penginapan'] = $this->Mpenginapan->inputData();
			$this->session->set_flashdata('tambahData','Data Berhasil di Input');
			redirect('Penginapan');
			
		}

	}
	public function editPenginapan($id_penginapan){
			$data['penginapan'] = $this->Mpenginapan->ambilData($id_penginapan)->row();
			$this->load->view('admin/header.php');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('editPenginapan',$data);
			$this->load->view('admin/footer');
			$this->load->view('admin/js');	
	}
	public function ubahDataPenginapan(){
		$this->Mpenginapan->updateData();
		$this->session->set_flashdata('pesanUbah','Ubah Data Berhasil');
		redirect('Penginapan');
	}
	public function hapusData($id_penginapan){
		$this->Mpenginapan->deleteData($id_penginapan);
		$this->session->set_flashdata('pesanHapus','Data Berhasil di Hapus');
		redirect('Penginapan');
	}
	
}