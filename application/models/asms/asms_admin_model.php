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
}  


?>