<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
	public function index()
	{
		$this->load->view('registration');
    }

    public function registration()
	{
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');

        if ($this->form_validation->run() == false)
        {
            $data['title'] = 'Monkee';
            $this->load->view('registration', $data);
        } else {
            echo 'data berhasil!';
        }
    }
    
}
