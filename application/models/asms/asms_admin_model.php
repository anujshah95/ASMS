<?php


class asms_admin_model extends CI_Model
{
	function send_message_subscriber()
	{
		$get_sub_emails_query=$this->db->get('tbl_Subscriber');
		$array=array();

		foreach($get_sub_emails_query->result() as $row)
		{
			/*$res=array(
					'sub_email'=>$row['sub_email']

				);
			
			//return $result->result();
			echo $res;*/
			$result= $row->sub_email;
			echo $result;
		}
	}

}  


?>