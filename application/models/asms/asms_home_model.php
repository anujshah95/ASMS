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
		$email_id=$retailer_request_data['email_id'];
		$query= $this->db->select('*')->from('tbl_Login')->where('email_id',$email_id)->get();

		if($query->num_rows==0) //echo "email id is not exist in login table means it is unique";
			{
				if($this->db->insert('tbl_Retailer_Request',$retailer_request_data))
				redirect('index.php/asms/home/retailer_request1_email');
			
				else //echo "already exist in retailer request table";
					{
						$data['value']='retailer_request_error';
						$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));						
					}
			}

		else //echo "already exist in login table";
		{
			$data['value']='retailer_request_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
		}	

		/* old method where data is only checked in Retailer Request table .. not in tbl_Login table
		if(!$this->db->insert('tbl_Retailer_Request',$retailer_request_data))
		{
			$data['value']='retailer_request_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
		}

		else
		{
			redirect('index.php/asms/home/retailer_request1_email');
		}
		*/
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
		$email_id=$this->input->post('email_id');
		echo $email_id;
	
		//Simple PHP method to get rid based on emailid and get rname of that rid
			/*
			$query=mysql_query("select * from tbl_Login where email_id='$email_id'");
			echo mysql_result($query,0,'rid');

			$results=mysql_query("select a.* from tbl_Retailer_Request a inner join tbl_Login b on a.rid=b.rid where b.rid='$rid'");
			echo mysql_result($results,0,'rname');
			*/

		// Fetch rid based upon inputted email id
		$this->db->select('*');
		$this->db->where('email_id',$email_id);
		$rid_query=$this->db->get('tbl_Login');

		if($rid_query->num_rows>=1)
		{
			foreach ($rid_query->result() as $row)
			{ 
				$rid=$row->rid;
				echo $rid;
			}

			//Fetch rname from rid
			$this->db->select('*');
			$this->db->from('tbl_Retailer_Request');
			$this->db->join('tbl_Login','tbl_Retailer_Request.rid = tbl_Login.rid');
			$this->db->where("tbl_Login.rid = '$rid' ");
			$rname_query=$this->db->get();

			if($rname_query->num_rows>=1)
			{
				foreach($rname_query->result() as $row)
					$rname=$row->rname;
					$this->session->set_userdata('rname',$rname); // Sets the rname session
			}
		}

		//Check if inputted email id exist in tbl_Login table or not 
		$this->db->where('email_id',$email_id);
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