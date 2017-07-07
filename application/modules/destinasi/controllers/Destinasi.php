<?php

class Destinasi extends CI_controller

{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		
		$this->load->model('Mdestinasi');

	}
	public function index(){
		$data['destinasi'] = $this->Mdestinasi->destinasi()->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('destinasi',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function tambahDestinasi(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('tambahDestinasi');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');	
	}

	public function tambahkanDestinasi(){
		$this->form_validation->set_rules('nama','Nama','required',array('required' => 'Masukkan Nama'));
		$this->form_validation->set_rules('lokasi','Lokasi','required',array('required' => 'Masukkan Lokasi'));
		$this->form_validation->set_rules('daerah','Daerah','required',array('required' => 'Masukkan Daerah'));
		$this->form_validation->set_rules('kota','Kota','required',array('required' => 'Masukkan Kota'));
		$this->form_validation->set_rules('jenis_destinasi','Jenis_destinasi','required',array('required' => 'Masukkan Jenis Wisata'));
		$this->form_validation->set_rules('deskripsi','deskripsi','required', array('required' => 'Masukkan Deskripsi'));
		$this->form_validation->set_rules('harga','Harga','required|is_numeric', array('required' => 'Masukkan Harga','is_numeric' => 'M'));

		if($this->form_validation->run() == false){
			$this->load->view('admin/header.php');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/topbar');
			$this->load->view('tambahDestinasi');
			$this->load->view('admin/footer');
			$this->load->view('admin/js');	
		}else{
			$this->Mdestinasi->inputData();
			$this->session->set_flashdata('pesanTambah','Data Sudah di Tambahkan');
			redirect('Destinasi');
			
		}
	}

	public function editDestinasi($id_destinasi){
		$data['destinasi'] = $this->Mdestinasi->ambilData($id_destinasi)->row();
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('editDestinasi',$data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');	
	}

	public function updateDestinasi(){
		$this->Mdestinasi->updateDestinasi();
		$this->session->set_flashdata('pesan','Data Sudah di Ubah');
		redirect('Destinasi');
	}
	public function hapusDestinasi($id_destinasi){
		$this->Mdestinasi->deleteDestinasi($id_destinasi);
		$this->session->set_flashdata('pesanHapus','Data Sudah di Hapus');
		redirect('Destinasi');
	}

}
