<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		 $this->load->model('donor','',TRUE);
		 $this->load->library('form_validation');
		

	}

	function index()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
		
		$this->form_validation->set_rules('bg', 'Blood Group', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['txt']='';
			
		
			$this->load->view('welcomehome',$data);
		}
		else
		{
			$srdata=array(
		'bg' =>$this->input->post('bg',TRUE));
			$result=$this->donor->Search($srdata,0);
			if($result)
			{
				$this->session->set_userdata('search',$srdata );
				
				}
			$data["result"]=$result;
			#$data['css']="#addform {display:none;}";
			$data['txt']='';
			$data['prev']=0;
			$data['next']=1;
			
			$this->load->view('searchhome',$data);
		}
	}

	public function pagin($value='1')
	{
		# code...
		$value=(int) $value;
		if ($value<0){
			redirect('welcome','refresh');
		}
		if($this->session->userdata('search'))
		{
			$srdata=$this->session->userdata('search');
			$result=$this->donor->Search($srdata,$value);
			if ($result=="<tr>No matching Results</tr>"){
				$this->session->sess_destroy();
				redirect('welcome','refresh');
			}
			else{
				$data["result"]=$result;
			#$data['css']="#addform {display:none;}";
			$data['txt']='';
			$data['prev']=$value - 1;
			$data['next']=$value+1;
			$this->load->view('searchhome',$data);
		

			}
			

		}
		else{
			redirect('welcome','refresh');
		}
	}
}