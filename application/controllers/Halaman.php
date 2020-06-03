<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('m_mhs');
	}

	public function index(){
		$data['sql'] = $this->m_mhs->getmhs()->result();
		$this->load->view('template/header');
		$this->load->view('pages/list_matkul', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$this->load->view('template/header');
		$this->load->view('pages/tambah_matkul');
		$this->load->view('template/footer');
	}

	public function simpan(){
		$kd_mk = $this->input->post('kd_mk');
		$hari = $this->input->post('hari');
		$matkul = $this->input->post('matkul');
		$masuk = $this->input->post('masuk');
		$keluar = $this->input->post('keluar');
		$data = array(
			'kd_mk' => $kd_mk,
			'hari' => $hari,
			'matkul' => $matkul,
			'masuk' => $masuk,
			'keluar' => $keluar);
		$this->m_mhs->simpan($data);
		redirect('Halaman');	
	}

	public function edit(){
    $id_matkul = $this->uri->segment(3);
    $data['matkul'] = $this->m_mhs->matkul($id_matkul)->row_array();
    $this->load->view('template/header');
    $this->load->view('pages/edit_matkul',$data);
    $this->load->view('template/footer');
  }

  public function edit_simpan(){
  		$id = $this->input->post('id');
		$kd_mk = $this->input->post('kd_mk');
		$hari = $this->input->post('hari');
		$matkul = $this->input->post('matkul');
		$masuk = $this->input->post('masuk');
		$keluar = $this->input->post('keluar');
		$data = array(
			'kd_mk' => $kd_mk,
			'hari' => $hari,
			'matkul' => $matkul,
			'masuk' => $masuk,
			'keluar' => $keluar);
		$this->db->where('id',$id);
		$this->db->update('mhs',$data);
		redirect('Halaman');	
	}

	function delete(){
    $id = $this->uri->segment(3);
    $this->db->where('id',$id);
    $this->db->delete('mhs');
    redirect('Halaman');
  }

  public function logout(){
  	$this->session->unset_userdata('logged_in');
  	redirect('','refresh');
  }



}
