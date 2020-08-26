<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('billing_model');
		$this->load->model('cart_model');
        $this->load->library(array('form_validation'));
        $this->load->library(array('email'));
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->helper(array('form'));
        $this->user_id = $this->session->userdata('user_id');
	}

	public function index()
	{	
		$this->data['title'] = 'Billing';
		
		$this->load->view('billing_vw', $this->data);
	}
	public function home()
	{	
		
		$this->load->view('Welcome_page');
	}	
	public function save_order()
	{
        $this->form_validation->set_rules('name', 'name', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'required|xss_clean');
        $this->form_validation->set_rules('address', 'address', 'required|xss_clean');
        $this->form_validation->set_rules('phone', 'phone', 'required|xss_clean');

        if ($this->form_validation->run() == false)
        {  
            $this->load->view('billing_vw');

        }
        else{         
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone'),
		);		

		$cust_id = $this->billing_model->insert($customer); 
            redirect( base_url('billing/retrieve') ); 
            }	
	}
    public function retrieve(){
        $data['x']=$this->billing_model->ret();
        $this->load->view('billingsuccess_view',$data);
    
    } 

}