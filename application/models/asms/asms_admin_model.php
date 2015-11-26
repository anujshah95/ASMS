<?php


class asms_admin_model extends CI_Model
{
	function send_message_subscriber($subscriber_message_data)
	{

		$this->db->insert('tbl_Subscriber_Message',$subscriber_message_data);
	}
	
	function get_sub_emails()
	{	
		$get_sub_emails_query=$this->db->get('tbl_Subscriber');
		$sub_email=array();
		$sub_name=array();
		$results=array();

		foreach($get_sub_emails_query->result() as $row)
		{
			/*$results[]=array(
				$sub_email=$row->sub_email,
				$sub_name=$row->sub_name
				);*/
			$sub_email[]=$row->sub_email;
			$sub_name[]=$row->sub_name;
		};
		return array(
			'sub_email'=>$sub_email,
			'sub_name'=>$sub_name,
			);
		//return $results;
	}

	function myprofileDetails()
	{
		$query=$this->db->get('tbl_Login');
		return $query->result();
	}

	function changePassword()
	{
		$login_data = $this->session->userdata('session_data'); //Retriving session
		
		$this->db->where('password',$this->input->post('oldPwd'));
		$this->db->where('lid',$login_data[0]->lid);

		$query=$this->db->get('tbl_Login');

		if($query->num_rows==1)
		{
			$new_password=array(
				'password'=>$this->input->post('newPwd')
				);
			$this->db->where('lid',$login_data[0]->lid);
			$this->db->update('tbl_Login',$new_password);

			$data['value']='changePassword_success';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/admin/admin_home_header'));
		}
		else
		{
			$data['value']='changePassword_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/admin/admin_home_header'));
		}
	}
}  


?>