<?php

class asms_home_model extends CI_Model
{

	function guest_feedback_f($guest_feedback_data)
	{
		$this->db->insert('tbl_Guest_Message',$guest_feedback_data);
		echo mysql_error();

	}


	function retailer_request_f($retailer_request_data)
	{
		$this->db->insert('tbl_Retailer_Request',$retailer_request_data);
		echo mysql_error();
	}

	
	function asms_login_model_f()
	{
		$this->db->where('uname',$this->input->post('uname'));
		$this->db->where('password',$this->input->post('password'));
		$this->db->where('type',$this->input->post('login_type'));

		$query=$this->db->get('tbl_Login');

		if($query->num_rows==1)
		{
			return true;
		}
	}

	function subscribe_f($subscriber_data)
	{
		$this->db->insert('tbl_Subscriber',$subscriber_data);
		//echo mysql_error();
	}
	
}

?>