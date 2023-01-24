<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_siswa');
	}

	public function index(){
		$this->load->view('templates/sidebar');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

	public function get_new_user_request(){
		$data = $this->m_siswa->get_new_user_request();
        echo json_encode($data);
	}

	public function get_absensi(){
		$data = $this->m_siswa->get_absensi();
        echo json_encode($data);
	}
	
	public function acc_user_request(){
		$id = $this->input->get('id');
		$this->db->set('status', '1');
		$this->db->where('id', $id);
		$this->db->update('tb_siswa');

		$this->session->set_flashdata('success', 'Siswa berhasil di ACC ');
		redirect('pages');
	}
    
}
