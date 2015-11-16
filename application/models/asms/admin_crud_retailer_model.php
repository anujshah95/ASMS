<?php

class admin_crud_retailer_model extends CI_Model
{
	function admin_crud_retailer_f($retailer_data)
	{
		if(isset($_POST['submit']))
		{
			$this->db->insert('tbl_Retailer_Request',$retailer_data);
		}
	
		else
		{
			echo "Error : ".error_reporting(E_ALL);
		}
	}

	function approve_retailer_request($approve,$approve_change_status,$retailer_data)
	{
			$this->db->where('rid',$approve);
			$this->db->update('tbl_Retailer_Request',$approve_change_status);
			$this->db->insert('tbl_Login',$retailer_data);
			return $this->db-> affected_rows() > 0;
			//echo mysql_error();	
	}

	function disapprove_retailer_request($disapprove,$disapprove_change_status)
	{
		$this->db->where('rid', $disapprove); 
		$this->db->update('tbl_Retailer_Request',$disapprove_change_status);
  		//$this->db->delete('tbl_Retailer_Request');
		return $this->db-> affected_rows() > 0;
	}

	function update_retailer($update_retailer_data)
	{
		if(isset($_POST['submit']))
		{
			$this->db->where('rid',$this->input->post('rid'));
			$this->db->update('tbl_Retailer_Request', $update_retailer_data); 
			//print_r ($update_retailer_data);
		}
	
		else
		{
			echo "Error : ".error_reporting(E_ALL);
		}
	}

	function update_retailer_s($data)
	{
		// $data=intval($data);
		
		
		$this->db->where('rid',$data);
        $query=$this->db->get('tbl_Retailer_Request');
        
        if($query->num_rows >0)
        {
	    	return $query->result();
	    }
		//print_r($query);
	}

	function display_retailer_request()
	{
		$this->db->where('status',2);
		$query=$this->db->get('tbl_Retailer_Request');
		return $query->result();
	}

	function display_approved_retailer()
	{
		$this->db->where('status',1);
		$query=$this->db->get('tbl_Retailer_Request');
		return $query->result();
	}

	function delete_retailer($data)
	{
		$this->db->where('rid', $data); 
  		$this->db->delete('tbl_Retailer_Request');
		return $this->db-> affected_rows() > 0;
	}

	function add_products($add_products_data)
	{
		if(isset($_POST['submit']))
		{
			$this->db->insert('tbl_Products',$add_products_data);
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

	function display_subscribers()
	{
		$query=$this->db->get('tbl_Subscriber');
		return $query->result();
	}

	function delete_subscriber($sub_id)
	{
		$this->db->where('sub_id', $sub_id); 
  		$this->db->delete('tbl_Subscriber');
		return $this->db-> affected_rows() > 0;
	}
}

?>