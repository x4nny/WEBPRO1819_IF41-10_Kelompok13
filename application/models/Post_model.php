<?php
class Post_model extends CI_Model{
 
    function save_post($jdl,$berita){
        $hsl=$this->db->query("INSERT INTO post (title,content) VALUES ('$jdl','$berita')");
        return $hsl;
    }
 
    function get_berita_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM post WHERE post_id='$kode'");
        return $hsl;
    }
 
    function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM post ORDER BY post_id DESC");
        return $hsl;
    }
    function get_all(){
        return $this->db->get('post')->result_array();
    }
    function delete_post($post_id){
        $this->db->where('post_id',$post_id);
        $this->db->delete('post'); 
    }
    function edit_post(){
        $data = [
			"content" => $this->input->post('post', true)
		];
		$this->db->where('post_id',$this->input->post('post_id'));
		$this->db->update('post',$data);
    }
    function get_post($id){
        return $this->db->get_where('post',['post_id'=>$id])->row_array();
    }
}