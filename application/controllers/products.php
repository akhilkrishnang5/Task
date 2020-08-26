<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('products_model');
		$this->load->model('addproducts_model');
	}
	    public function retrieve(){
        $data['x']=$this->addproducts_model->ret();
        $this->load->view('products_view',$data);
    
    } 
}