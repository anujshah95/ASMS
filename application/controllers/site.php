<?php
// Controller

/* tut-1
class site extends CI_Controller{

	function index(){

		$this->load->model('site_model');
		$data['records']=$this->site_model->getData();

		$this->load->view('site_view',$data);

	}
}
*/

/* tut - 2
class site extends CI_Controller{

	function index(){

		$this->load->model('site_model');
		$data['rows']=$this->site_model->getAll();

		$this->load->view('site_view',$data);
	}
}
*/

// tut - 3 .. sending email with gmail

class site extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		//$this->is_logged_in();
	}

	function index()
	{
		$this->load->library('email');
		$this->email->set_newline("\r\n"); 

		$this->email->from('anuj.shah95@gmail.com','Shivani Enterprise');
		$this->email->to('14030142063@sicsr.ac.in');
		$this->email->subject('This is an email test');
		$this->email->message('this is working .. yahoo !! ');

//-------------For attachment------------------------------------------------------

		$path= $this->config->item('server_root'); //for attachment
		//echo $path; die();
		$file=$path.'/ci/attachments/info.txt';

		$this->email->attach($file);

//-------------attachment stuff ends here -----------------------------------------

		if($this->email->send())
		{
			echo "Successfully Send Email";
		}

		else
		{
			show_error($this->email->print_debugger());
		}
	}
}




?>