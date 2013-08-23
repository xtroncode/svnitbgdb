<?php 
Class Donor extends CI_Model
{
	public function Search($data,$offset)
	{
		# code...
		
		$limit=20;
		$offset*=$limit;
		$this->db->order_by('age','asc');
		$query = $this->db->get_where('donor', $data , $limit, $offset);
		
		if ($query->num_rows()>0)
		{

		$res="<tr>";
				foreach ($query->result_array() as $row) {
					# code...
					$res .="<th>".$row['name']."</th><th>".$row['bg']."</th>
					<th>".$row['email']."</th>
					<th>".$row['rollno']."</th>
					<th>".$row['branch']."</th>
					<th>".$row['hostel']."</th><th>".$row['address']."</th></tr>";
					
				}

			return $res;
		}
		
		else{
			return "<tr>No matching Results</tr>";
		}

	
	#else{
	#	$srchf="No matching Results";
	#	return  $srchf;
	#}

   

	}

	public function AddEntry()
	{
		# code...
		#$db['default']['db_debug'] = FALSE;
		$data=array('name' =>$this->input->post('name',TRUE),
		'email' =>$this->input->post('email',TRUE),
		'bg' =>$this->input->post('bg',TRUE),
		'contact' =>$this->input->post('contact',TRUE),
		'rollno' =>$this->input->post('rollno',TRUE),
		'branch' =>$this->input->post('branch',TRUE),
		'hostel' =>$this->input->post('hostel',TRUE),
		'age' =>$this->input->post('age',TRUE),
		'address' =>$this->input->post('address',TRUE)
		);

		$this->db->insert('donor',$data);

		return TRUE;  
		
	}
}