<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {

	public function __construct()
	{
        $this->tableName = 'receipt';
        $this->primaryKey = 'id';
        $this->tableName1 = 'placeorder';
	}
    public function insert($data = array()){

        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }	
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
    public function ret(){
        $query = $this->db->query("SELECT * FROM receipt ORDER BY id DESC LIMIT 1");
        $result = $query->result_array();
        return $result;
    }	
}