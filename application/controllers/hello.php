<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hello extends CI_controller
{
	
	public function index()
	{
		# code...
		echo "This is index func";
		
	}
	public function one($p1,$p2)
	{
		# code...
		echo "This is one";
		echo "$p1 , $p2";
	}
}
?>