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
		$this->load->view('testing');
    }

    public function registration()
	{
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',['matches'=>'password doesnt match','min_length'=>'Password too short']);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if ($this->form_validation->run() == false)
        {	
            $data['title'] = 'Monkee';
            $this->load->view('registration_1', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name',true)),
                'email' => htmlspecialchars($this->input->post('email',true)),
                'password' => password_hash($this->input->post('password1'), 
                PASSWORD_DEFAULT),  
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user',$data);
            redirect('Auth');
        }
    }
    public function login(){
        $email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password,
			);
		$cek = $this->Userlogin_model->cek_login("user",['email'=>$email])->row_array();
        
        if($cek){
            if(password_verify($password,$cek['password'])){
                echo 'berhasil';
            }
            else{
                echo 'salah';
            }
 
		// 	$data_session = array(
		// 		'email' => $email,
		// 		'status' => "login"
		// 		);
 
		// 	$this->session->set_userdata($data_session);
 
		// 	echo 'berhasil';
 
		}else{
			echo "Username dan password salah !";
		}
	}
    
}
