<?php 

class form extends CI_Controller{

	function __construct(){
		parent::__construct();
		//me load library
		$this->load->library('form_validation');
	}
	
	function index(){
		//load file v_form pada folder views
		$this->load->view('v_form');//pada fungsi ini akan menampilkan halaman v_form
	}

	function aksi(){
		//proses validasi 
		$this->form_validation->set_rules('nama','Nama','required');//
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}