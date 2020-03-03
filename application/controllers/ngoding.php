<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
	function index(){
	// load library malasngoding pada library 
		$this->load->library('malasngoding');
	//load function nama_saya pada library malasngoding
		$this->malasngoding->nama_saya();
				echo "<br/>";
				//load function nama_kamu pada library malasngoding
                $this->malasngoding->nama_kamu("Andi");
	}

}