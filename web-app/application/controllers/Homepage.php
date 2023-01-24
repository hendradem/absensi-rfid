<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_siswa');
	}

	public function index(){
		$this->load->view('pages/homepage');
	}
	
	public function absen(){
		$this->load->view('pages/homepage_absen');
	}

	public function absen_success(){
		$data['namanya'] = "asdasd";
		$this->load->view('pages/homepage_absen_success', $data);
	}

	public function absen_action(){
		$query = $this->db->query("SELECT * FROM tb_rfidlog");
		$row   = $query->row_array();
		$rfid  = $row['id_card'];

		$searchUser = $this->db->query("SELECT * FROM tb_siswa WHERE id_card='$rfid'  ");
		$rowUser = $searchUser->row_array();
		if($rowUser == 0){
			echo "kosong";
		} else {
			$selectedUser = $this->db->get_where('tb_siswa', array('id_card' => $rfid))->result();
			echo json_encode($selectedUser);
		}
	}
	
	public function daftar(){
		$status = $this->input->get('status');
		if($status == 'registration'){
			$this->load->view('pages/homepage_daftar');
		} elseif($status == 'error') {
			$this->load->view('pages/homepage_daftar_error');
		} else {
			$this->load->view('pages/homepage_daftar_success');
		}
    }
    
}
    