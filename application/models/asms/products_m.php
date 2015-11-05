<?php


class Products_m extends CI_Model
{
	function add_products($data)
	{
	
		if(isset($_POST['submit']))
		{
			$this->db->insert('tbl_Products',$data);
		}
	
		else
		{
			echo "Error : ".error_reporting(E_ALL);
		}
	}
	function display_products()
	{
		$query=$this->db->get('tbl_Products');

		return $query->result();
	}
	function delete_products()
	{

	}
} 