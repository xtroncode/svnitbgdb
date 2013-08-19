<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class addnew extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		 $this->load->model('donor','',TRUE);

	}

	function index()
	{
		$this->load->library('form_validation');
		require_once('recaptchalib.php');
          $publickey = "6LdnDOYSAAAAAFTPK5_UmvMWmL9mhevH4F6qf5_K"; // you got this from the signup page
         $data['recaptcha_html']=recaptcha_get_html($publickey);
       $privatekey = "6LdnDOYSAAAAAPNVAVKqCYywhPohK0KzD3xROfZ9";
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
		$resp=recaptcha_check_answer($privatekey,
                    $_SERVER['REMOTE_ADDR'],
                    $_POST['recaptcha_challenge_field'],
                    $_POST['recaptcha_response_field']);

		 $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|max_length[30]');
		 $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[donor.email]');
		 $this->form_validation->set_rules('bg', 'Blood Group', 'trim|required|xss_clean|max_length[8]');
		 $this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric|xss_clean|max_length[10]');
		 $this->form_validation->set_rules('age', 'Age', 'trim|max_length[2]|greater_than[17]|required|xss_clean');
		 $this->form_validation->set_rules('branch', 'Branch', 'trim|required|xss_clean|max_length[25]');
		 $this->form_validation->set_rules('rollno', 'Admission Number', 'trim|alpha_numeric|required|xss_clean|max_length[10]|is_unique[donor.rollno]');
		 $this->form_validation->set_rules('hostel', 'Hostel Name', 'trim|required|xss_clean|max_length[30]');
		 $this->form_validation->set_rules('address', 'Address/Room  No.', 'trim|required|xss_clean|max_length[100]');
		 
		 if ($this->form_validation->run() == FALSE or !$resp->is_valid)
		{
			if (!$resp->is_valid)
				{			$data['txt']="<div class='alert alert-error'>Wrong Captcha</div>";}
			else{
				$data['txt']='';
			}
			$this->load->view('welcomehome',$data);
		}
		else
		{
			$result=$this->donor->addEntry();
			if($result)
			{
				$this->session->set_userdata('Registered',"<div class='alert alert-success'>Thankyou for adding yourself !</div> ");

			}
			redirect('welcome','refresh');
		}
}

	
		
	
}