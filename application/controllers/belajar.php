<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('data');
	}
// ini adalah index
	public function index(){
		echo "ini method index pada controller belajar";
	}
//method halo
	public function halo(){
		echo "ini method halo pada controller belajar";
	}
//method halo
    public function hai(){
        $data=array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'nama' => "rofiq");
	//load file viewbelajar pada folder views
        $this->load->view('viewbelajar',$data);
	}
	function user(){
	//generate query pada database menjadi array
		$data['user'] = $this->data->ambil_data()->result();
	//load file v_user pada folder views
		$this->load->view('v_user',$data);
	}
}