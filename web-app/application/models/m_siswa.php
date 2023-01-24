<?php 
 class M_siswa extends CI_Model{
    function get_rfid(){
        return $this->db->get('tb_rfidlog')->result();
    }
    function save_rfid($data){
        return $this->db->insert('tb_rfidlog', $data);
    }
    function get_absensi(){
        return $this->db->get('tb_absen')->result();
    }
    function get_siswa(){
        return $this->db->get('tb_siswa');
    }
    function get_new_user_request(){
        return $this->db->get_where('tb_siswa', array('status' => 0))->result();
    }
	function input_siswa($data,$table){
		$this->db->insert($table,$data);
	}
}