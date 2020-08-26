<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model{
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function auth_check($data)
    {
        $query = $this->db->get_where('users', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_user($data)
    {
 
        $insert = $this->db->insert('users', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }
    public function upload($data){
        
        $this->db->insert('upload',$data);
        return true;
    }
    public function imageRetrieve(){
        $this->db->select('*');
        $this->db->from('upload');
        $query = $this->db->get();
        return $query->result();
        
    } 
    public function customerlist(){
        $this->db->select('id,name,address');
        $this->db->from('receipt');
        $query = $this->db->get();
        return $query->result();
   } 
    public function orderlist(){
        $this->db->select('*');
        $this->db->from('placeorder');
        $query = $this->db->get();
        return $query->result();
   }   
}
?>