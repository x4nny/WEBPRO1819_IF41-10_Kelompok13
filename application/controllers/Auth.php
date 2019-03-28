<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Userlogin_model');
    }
    
	public function index()
	{
		$this->load->view('login');
    }

    public function registration()
	{
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',['matches'=>'password doesnt match','min_length'=>'Password too short']);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if ($this->form_validation->run() == false)
        {
            $data['title'] = 'Monkee';
            $this->load->view('registration', $data);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password'=> password_hash($this->input->post('password'), 
                PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user',$data);
            echo 'berhasil';
        }
    }
    public function login(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Userlogin_model->cek_login("login_ex",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			echo 'berhasil';
 
		}else{
			echo "Username dan password salah !";
		}
	}
    
}
