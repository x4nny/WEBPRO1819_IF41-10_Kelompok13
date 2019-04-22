<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monkkee extends CI_Controller {

	public function __construct(){
        parent::__construct();
	}


	public function index(){
		 $this->load->view('index');
	}

	public function language(){
		 $this->load->view('V_setting_language');
	}

	public function email(){
		 $this->load->view('V_setting_email');
	}

	public function password(){
		 $this->load->view('V_setting_password');
	}

	public function alias(){
		 $this->load->view('V_setting_alias');
	}

	public function timeout(){
		 $this->load->view('V_setting_timeout');
	}

	public function editor(){
		 $this->load->view('V_setting_editor');
	}

	public function export(){
		 $this->load->view('V_setting_export');
	}

	public function donation(){
		 $this->load->view('V_setting_donation');
	}

	public function delete(){
		 $this->load->view('V_setting_delete');
	}

}

?>
