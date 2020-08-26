<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Home extends CI_Controller {
  
     public function __construct()
        {
         parent::__construct();
         $this->load->model('Home_model');
         $this->load->library(array('form_validation','session'));
         $this->load->helper(array('url','html','form','security'));
         $this->user_id = $this->session->userdata('user_id');
	   
        }

    public function index()
    {
     $this->load->view('Welcome_page');
    }
    public function index2()
    {
     $this->load->view('myform_login');
    }
    public function post_login()
        {
 
        $this->form_validation->set_rules('username', 'username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  

            $this->load->view('myform_login');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),
 
             );
   
            $check = $this->Home_model->auth_check($data);
            
            if($check != false){
 
                 $user = array(
                 'user_id' => $check->id,
                 'username' => $check->username,
                 "is_logged_in"  => true
                );
  
            $this->session->set_userdata($user);
 
             redirect( base_url('Home/dashboard') ); 
            }

           $this->load->view('myform_login');
        }
         
    }  

	public function valid_password($password=""){
		
		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';

		if (preg_match_all($regex_lowercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_uppercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_number, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');

			return FALSE;
		}

		if (preg_match_all($regex_special, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>ยง~'));

			return FALSE;
		}

		if (strlen($password) < 7)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least 6 characters in length.');

			return FALSE;
		}

		if (strlen($password) > 32)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');

			return FALSE;
		}

		return TRUE;
	}

    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('Home'));
   }  

   public function dashboard(){
       if(empty($this->user_id)){
        redirect(base_url('Home'));
      }
       $this->load->view('myform_welcome');
    }
   public function dashboard_register(){
       if(empty($this->user_id)){
        redirect(base_url('Home'));
      }
       $this->load->view('myform_welcome_register');
	}
	public function fileupload(){
		$this->load->view('fileupload');
	}
	public function upload(){
		
		$img=$_FILES['img']['name'];
		 $rand_val = rand(10, 10000);

		 if ($img!='') {
            $config['upload_path'] = 'uploadss/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $rand_val . '_' . $img;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('img')) {
                echo "error";
            } else {
                $uploadData = $this->upload->data();
                $img = $uploadData['file_name'];
                $data = $this->upload->data();

            }
        }else{
            $img="";
        }
		$data=array(
		'img'=>$img
		
		);
		$x=$this->Home_model->upload($data);
		if($x){
			
			redirect('Home/imageRetrieve');
		}else{
			
		echo 'failed'	;
			
		}
	}
	public function imageRetrieve(){
		$data['x']=$this->Home_model->imageRetrieve();
		$this->load->view('rt_vw',$data);
	
	}
    public function customerlist(){
        $data['x1']=$this->Home_model->customerlist();
        $this->load->view('customerlist',$data);
    
    }
    public function orderlist(){
        $data['x2']=$this->Home_model->orderlist();
        $this->load->view('orderlist',$data);
    
    }
}