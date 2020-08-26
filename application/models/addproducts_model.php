

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class addproducts_model extends CI_Model{
    function __construct() {
        $this->tableName = 'vegdishes';
        $this->primaryKey = 'id';
    }
    
    public function insert($data = array()){

        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }
    public function ret(){
        $this->db->select('*');
        $this->db->from('vegdishes');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDetails($id)
    {
        $this->db->select('*');
        $this->db->from('addproducts');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $result = $query->row();
        }
    }
 
    public  function delete($id){
    $this->db->where('id', $id);
    if($this->db->query("delete from addproducts where id='".$id."'")){
        return true;
    }else{
        return false;
    }
    }
}