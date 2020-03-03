<?php 

class data extends CI_Model{
	function ambil_data(){
		//mengambil data dari database dengan nama tabel user
		return $this->db->get('user');
	}
}