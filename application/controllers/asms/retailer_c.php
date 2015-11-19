<?php


class retailer_c extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function is_logged_in()
   	{	
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');

		if(($this->session->userdata('session_data')==FALSE))
		{
			$data['value']='logout_error';
			$this->load->view('asms/asms_sweet_alert',$data);
	    }
	}

	function retailer_home()
	{
		if(!$this->is_logged_in())
		{
			$this->load->view('/asms/retailer/retailer_index');
		}	
	}
}



?>