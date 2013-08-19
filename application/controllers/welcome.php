<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class welcome extends CI_Controller {

	public function __construct()
	{
		# code...
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->helper(array('form','url'));
		#$data["js"]="<script>x=document.getElementById";
			require_once('recaptchalib.php');
          $publickey = "6LdnDOYSAAAAAFTPK5_UmvMWmL9mhevH4F6qf5_K"; // you got this from the signup page
         $data['recaptcha_html']=recaptcha_get_html($publickey);
       
                    
		$data['txt']='';
		
		 if($this->session->userdata('Registered'))
		 {
		 	$data['txt']=$this->session->userdata('Registered');
		 	$this->session->unset_userdata('Registered');
		
		 	
		 }
		 if($this->session->userdata('search'))
		 {
		 	$this->session->unset_userdata('search');
		 }

		 

		$this->load->view('welcomehome',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */