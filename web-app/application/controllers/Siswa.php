<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_siswa');
	}

	public function get_rfid(){
		$data = $this->m_siswa->get_rfid();
        echo json_encode($data);
	}

	public function insert_rfid(){ 
		if (isset($_GET['id_card'])) { 
			$rfid = $this->input->get('id_card'); 
			$data = array('id_card' => $rfid);

			if($this->m_siswa->save_rfid($data)){
				echo "success";
			}else{
				echo "error";
			}
		}else{
			echo "Undefined";
		}
	} 

	public function index(){
		$data['siswa'] = $this->m_siswa->get_siswa()->result();

		$this->load->view('templates/sidebar');
		$this->load->view('pages/siswa', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$this->load->view('templates/sidebar');
		$this->load->view('pages/siswa_tambah');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$admin = $this->input->get('admin');
		$idcard = $this->input->post('idcard');
		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$email = $this->input->post('email');
		$kelas = $this->input->post('kelas');

		$data = array(
			'id_card' => $idcard,
			'nama' => $nama,
			'nis' => $nis,
			'email' => $email,
			'kelas' => $kelas,
			'admin' => $admin,
			'status' => $admin
		);

		$insert = $this->m_siswa->input_siswa($data, tb_siswa);
		$this->session->set_flashdata('success', 'Tambah data siswa berhasil');
		if($admin == 1){
			redirect('siswa');
		} else {
			redirect('homepage/daftar?status='. 'success');
		}
	}

	public function delete(){
		$id = $this->input->get('id');
		$this->db->delete('tb_siswa', array('id' => $id)); 
		$this->session->set_flashdata('success', 'Delete data siswa berhasil');
		redirect('siswa');
	}
	
	
    
}
