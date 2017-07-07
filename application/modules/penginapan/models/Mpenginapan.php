<?php

class Mpenginapan extends CI_model
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function penginapan(){
    	$this->db->select('*');
    	$this->db->from('tabel_penginapan');
    	return $this->db->get();
    }
    public function ambilData($id_penginapan){
    	$this->db->select('*');
    	$this->db->where('id_penginapan',$id_penginapan);
    	$this->db->from('tabel_penginapan');
    	return $this->db->get();
    }
	public function InputData(){
		$cek_penginapan =
            $this->db->select('id_penginapan')
                ->from('tabel_penginapan')
                ->order_by('id_penginapan','DESC')
                ->limit('1')
                ->get();
				
		$data['id_penginapan']	= $cek_penginapan->row()->id_penginapan+1;
		$data['nama_penginapan']	= $this->input->post('nama');
		$data['fasilitas']	= $this->input->post('fasilitas');
		$data['lokasi']	= $this->input->post('lokasi');
		$data['daerah']	= $this->input->post('daerah');
		$data['kota']	= $this->input->post('kota');
		$data['jenis_penginapan']	= $this->input->post('jenis_penginapan');
		$data['deskripsi']	= $this->input->post('deskripsi');
		$data['harga']	= $this->input->post('harga');

		$config['upload_path']          = './inspinia/upload/penginapan';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = 'penginapan-'.($cek_penginapan->row()->id_penginapan+1);
        $config['max_size']             = 5000;
        $config['overwrite']            = true;
        $config['file_ext_tolower']     = true;

		$this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');
        if ($upload){
            $ext = strtolower(end(explode(".", $_FILES['gambar']['name'])));
            $data['foto'] = $config['file_name'].'.'.$ext;
        }

        $this->db->insert('tabel_penginapan',$data);
        return true;
	}
    public function updateData(){
        $data['id_penginapan']      = $this->input->post('id_penginapan');
        $data['nama_penginapan']    = $this->input->post('nama');
        $data['fasilitas']  = $this->input->post('fasilitas');
        $data['lokasi'] = $this->input->post('lokasi');
        $data['daerah'] = $this->input->post('daerah');
        $data['kota']   = $this->input->post('kota');
        $data['jenis_penginapan']   = $this->input->post('jenis_penginapan');
        $data['deskripsi']  = $this->input->post('deskripsi');
        $data['harga']  = $this->input->post('harga');

        $config['upload_path']          = './inspinia/upload/penginapan';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['file_name']            = 'penginapan-'.$this->input->post('id_penginapan');
        $config['max_size']             = 5000;
        $config['overwrite']            = true;
        $config['file_ext_tolower']     = true;

        $this->load->library('upload', $config);

        $upload = $this->upload->do_upload('gambar');
        if ($upload){
            $ext = strtolower(end(explode(".", $_FILES['gambar']['name'])));
            $data['foto'] = $config['file_name'].'.'.$ext;
        }
        else {
            $data['foto']     = $this->input->post('gambar');
        }
        $this->db->where('id_penginapan',$data['id_penginapan']);
        $this->db->update('tabel_penginapan',$data);
        return true;
    }
    public function deleteData($id_penginapan){
        $this->db->where('id_penginapan',$id_penginapan);
        $this->db->delete('tabel_penginapan');
    }

}