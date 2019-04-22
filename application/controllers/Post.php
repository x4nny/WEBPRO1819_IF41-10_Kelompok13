<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model('post_model');
        $this->load->library('form_validation');
    }
    
	public function index()
	{
        $data['post'] = $this->post_model->get_all();
		$this->load->view('posting1',$data);
    }
    function simpan_post(){
        $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya  
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $data['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
                $id=$data['user']['id'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');
 
                $this->post_model->save_post($berita,$id,$gambar);
                $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Berhasil ditambah</div>');
                redirect('post');
        }else{
            redirect('post');
        }
                      
        }else{
            redirect('post');
        }
                 
    }
 
    function lists(){
        $x['data']=$this->post_model->get_all_berita();
        $this->load->view('post_list',$x);
    }
 
    function view(){
        $kode=$this->uri->segment(3);
        $x['data']=$this->post_model->get_berita_by_kode($kode);
        $this->load->view('v_post_view',$x);
    }
    function click(){
        $this->load->view('posting2');
    }
    function delete($id){
        $this->post_model->delete_post($id);
        $this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Berhasil Dihapus</div>');
        redirect('post');
    }
    function edit($id){
        $data['post'] = $this->post_model->get_post($id);

		$this->form_validation->set_rules('post','Post','trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('posting3', $data);
		}
		else{
			$this->post_model->edit_post();
			$this->session->set_flashdata('flash','<div class="alert alert-success" role="alert">Berhasil Diubah</div>');
			redirect('post');
		}
    }
 
}