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

	function approve_request($retailer_data)
	{
			$this->db->insert('tbl_Retailer_Login',$retailer_data);
			return $this->db-> affected_rows() > 0;
			echo mysql_error();	
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


	public function update_retailer_s($data)
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

	public function display_retailer()
	{
		$query=$this->db->get('tbl_Retailer_Request');
		return $query->result();
	}

	function delete_retailer($data)
	{
		$this->db->where('rid', $data); 
  		$this->db->delete('tbl_Retailer_Request');
		return $this->db-> affected_rows() > 0;
	}

	function delete_retailer_request($disapprove)
	{
		$this->db->where('rid', $disapprove); 
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

	
}

?>