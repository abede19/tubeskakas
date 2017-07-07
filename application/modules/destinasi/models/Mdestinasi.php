<?php

class Mdestinasi extends CI_model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function destinasi(){
		$this->db->select('*');
		$this->db->from('tabel_destinasi');
		$this->db->order_by('id_destinasi','DESC');
		return $this->db->get();
	}
	public function ambilData($id_destinasi){
		$this->db->select('*');
		$this->db->where('id_destinasi',$id_destinasi);
		$this->db->from('tabel_destinasi');
		return $this->db->get();
	}
	public function inputData(){
		$cek_destinasi = 
			$this->db->select('id_destinasi')
			->from('tabel_destinasi')
			->order_by('id_destinasi','DESC')
			->limit('1')
			->get();

		$data['id_destinasi']	= $cek_destinasi->row()->id_destinasi+1;
		$data['nama']    = 	$this->input->post('nama');
		$data['lokasi']  = 	$this->input->post('lokasi');
		$data['daerah']	 =	$this->input->post('daerah');
		$data['kota']	 =	$this->input->post('kota');
		$data['jenis_destinasi']	=	$this->input->post('jenis_destinasi');
		$data['deskripsi']		= $this->input->post('deskripsi');
		$data['harga']	 =	$this->input->post('harga');

		$config['upload_path']	='./inspinia/upload/destinasi';
		$config['allowed_types']	= 'jpg|png|jpeg';
		$config['file_name']	= 'destinasi-'.($cek_destinasi->row()->id_destinasi+1);
		$config['max-size']		= 5000;
		$config['overwrite']	= true;
		$config['file_ext_tolower']	= true;

		$this->load->library('upload',$config);
		$upload = $this->upload->do_upload('gambar');
		if ($upload) {
			$ext = strtolower(end(explode(".", $_FILES['gambar']['name'])));
			$data['foto'] = $config['file_name'].'.'.$ext;
		}


		$this->db->insert('tabel_destinasi',$data);
		return true;
	}
	public function updateDestinasi(){
		$data['id_destinasi']	= $this->input->post('id_destinasi');
		$data['nama']    = 	$this->input->post('nama');
		$data['lokasi']  = 	$this->input->post('lokasi');
		$data['daerah']	 =	$this->input->post('daerah');
		$data['kota']	 =	$this->input->post('kota');
		$data['jenis_destinasi']	=	$this->input->post('jenis_destinasi');
		$data['deskripsi']		= $this->input->post('deskripsi');
		$data['harga']	 =	$this->input->post('harga');

		$config['upload_path']	= './inspinia/upload/destinasi';
		$config['allowed_types']	= "png|jpg|jpeg";
		$config['file_name']	= 'destinasi-'.$this->input->post('id_destinasi');
		$config['max-size']		= 5000;
		$config['overwrite']	= true;
		$config['file_ext_tolower']	=true;

		$this->load->library('upload',$config);

		$upload = $this->upload->do_upload('gambar');
		if ($upload) {
			$ext = strtolower(end(explode(".", $_FILES['gambar']['name'])));
			$data['foto']	=	$config['file_name'].".".$ext;
		}else{

			$data['foto']	= $this->input->post('gambar');		
		}

		$this->db->where('id_destinasi',$data['id_destinasi']);
		$return = $this->db->update('tabel_destinasi',$data);
		return $return;
	}
	public function deleteDestinasi($id_destinasi){
		$this->db->where('id_destinasi',$id_destinasi);
		$this->db->delete('tabel_destinasi');
		return true;
	}
	
}