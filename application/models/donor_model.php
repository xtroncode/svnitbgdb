<?php 
Class Donor extends CI_Model
{
	public function Search()
	{
		# code...
		$query = $this->db->query("");
		$sql = "SELECT `Name`, `Email`, `BG`, `Contact`, `City`, `State`, `Pin`, `Age`, `id` FROM `donor`";


   

	}

	public function AddEntry()
	{
		# code...
		$this->db->Name =$this->input->post('name',TRUE)
		$this->db->Email =$this->input->post('email',TRUE)
		$this->db->BG =$this->input->post('bg',TRUE)
		$this->db->Contact =$this->input->post('contact',TRUE)
		$this->db->City =$this->input->post('city',TRUE)
		$this->db->State =$this->input->post('state',TRUE)
		$this->db->Pin =$this->input->post('pin',TRUE)
		$this->db->Age =$this->input->post('age',TRUE)

		$this->db->insert('donor',$this)

		return TRUE;  
		
	}
}