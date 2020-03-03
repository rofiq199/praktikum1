<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){	
	//me load halaman v_download	
		$this->load->view('v_download');
	}

	public function lakukan_download(){			
	//proses download. dari folder gambar dengan nama file inigambar.jpg	
		force_download('gambar/inigambar.jpg',NULL);
	}	

}