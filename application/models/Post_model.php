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
}