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
		$results=array();

		foreach($get_sub_emails_query->result() as $row)
		{
			/*$results[]=array(
				$row->sub_email
				);*/
			$results[]=$row->sub_email;
		};
		return $results;
	}
}  


?>