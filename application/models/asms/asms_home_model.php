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
		if(!$this->db->insert('tbl_Retailer_Request',$retailer_request_data))
		{
			$data['value']='retailer_request_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
		}

		else
		{
			redirect('index.php/asms/home/retailer_request1_email');
		}

		echo "<br>";
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
		if(!$this->db->insert('tbl_Subscriber',$subscriber_data))
		{
			$data['value']='subscriber_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
		}
		else
		{
			redirect('index.php/asms/home/subscribe_email');
		}

		echo "<br>";
		echo mysql_error();
	}
	
	function forgot_password_check_email()
	{	
		$this->db->where('email_id',$this->input->post('email_id'));

		$query=$this->db->get('tbl_Login');

		if($query->num_rows==1)
		{
			return true;
		}

	}

	function reset_password_f($reset_password_data,$email_id)
	{
		$this->db->where('email_id',$email_id);
		$this->db->update('tbl_Login',$reset_password_data);
		echo mysql_error();
	}
}

?>