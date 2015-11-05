<?php


class home extends CI_Controller
{
	//public $header_file;
	//$header_file=$this->load->view('asms/asms_home_header');
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('asms/asms_home.php',$this->load->view('asms/asms_home_header'));
	}

	function login()
	{
		$this->load->view('asms/asms_login.php',$this->load->view('asms/asms_home_header'));
	}

	function login1()
	{
		$this->load->model('/asms/asms_home_model');
		$type=$this->input->post('login_type');
		$query=$this->asms_home_model->asms_login_model_f();

		if($query)
		{
			$login_data=array(
			'uname'=>$this->input->post('uname'),
			'is_logged_in'=>true
			);

		$this->session->set_userdata($login_data);
			
			if($type=='admin')
			{
				redirect('index.php/asms/admin_index_controller/admin_home');
			}

			elseif ($type=='manufacture')
			{
				redirect('index.php/asms/home/manufacture_login');
			}

			elseif ($type=='retailer')
			{
				redirect('index.php/asms/home/retailer/retailer_login');
			}

			else
			{

			}

		}
		else
			{
				echo "<script>
			     alert('Invalid Username or Password..!! ');
				 window.location.href='login'; 
				 </script>";
			}
	}

	function products()
	{
		$this->load->view('asms/asms_products.php',$this->load->view('asms/asms_home_header'));
	}

	function retailer_request()
	{
		$this->load->view('asms/asms_retailer_request.php',$this->load->view('asms/asms_home_header'));
	}

	function retailer_request1()
	{
//-------------------------------------------Insert Retailer Request data to tbl_Retailer_Request--------------------------------------------

		$this->load->model('/asms/asms_home_model');

		$retailer_request_data=array(
		'rname'=>$this->input->post('rname'),
		'shop_name'=>$this->input->post('shop_name'),
		'shop_address'=>$this->input->post('shop_address'),
		'contact_number'=>$this->input->post('contact_number'),
		'other_number'=>$this->input->post('other_number'),
		'email_id'=>$this->input->post('email_id'),
		'vat'=>$this->input->post('vat'),
		'vat_date'=>$this->input->post('vat_date'),
		'cst'=>$this->input->post('cst'),
		'cst_date'=>$this->input->post('cst_date')
		);
		//print_r($retailer_request_data);

		$this->asms_home_model->retailer_request_f($retailer_request_data);

		echo "<script>
		     alert('Thank you for submitting retailer request under Shivani Enterprise .. We will reach you soon..!! ');
			 window.location.href='index';
			 </script>";
		
//-------------------------------------------Email sending to admin (shivanisurat09@gmail.com) from website------------------------------------
		$rname=$this->input->post('rname');
		$shop_name=$this->input->post('shop_name');
		$shop_address=$this->input->post('shop_address');
		$contact_number=$this->input->post('contact_number');
		$other_number=$this->input->post('other_number');
		$email_id_retailer_request=$this->input->post('email_id');
		$vat=$this->input->post('vat');
		$vat_date=$this->input->post('vat_date');
		$cst=$this->input->post('cst');
		$cst_date=$this->input->post('cst_date');

		$this->load->library('email');
		$this->email->set_newline("\r\n"); 

		$this->email->from($email_id_retailer_request,'Retailer Request');
		$this->email->to('shivanisurat09@gmail.com');
		$this->email->subject('Retailer Request Of '.$shop_name);
		//$emailbody='<h3> Respected Admin , <br> New Retaier Request is Arrived </h3>';
		$this->email->message('Hello Admin ,'."\n\n".
			"New Retailer Request Is Arrived , Please Check Your Admin Panel And Below Details : "."\n\n".
			"Retailer Name : ".$rname."\n".
			"Shop Name : ".$shop_name."\n".
			"Shop Address : ".$shop_address."\n".
			$rname.'\'s Contact Number : '.$contact_number."\n".
			$rname.'\'s Other Number : '.$other_number."\n".
			$rname.'\'s Email Address : '.$email_id_retailer_request."\n".
			"Vat Number : ".$vat."\n".
			"Vat Date : ".$vat_date."\n".
			"CST Number : ".$cst."\n".
			"CST Date : ".$cst_date."\n");

		if($this->email->send())
			echo "Successfully Sent An Email To <b> Admin (shivanisurat09@gmail.com) !! </b> <br>";
		else
			show_error($this->email->print_debugger())."\n";

//-------------------------------------------Email sending to guest from shivani enterprise--------------------------------------------------

		$this->email->from('shivanisurat09@gmail.com','Shivani Enterprise');
		$this->email->to($email_id_retailer_request);
		$this->email->subject('Retailership Request Related');
		$this->email->message('Hello '.$rname." ,"."\n\n".
			"Good wishes and warm greetings !! "."\n\n".
			"Thank You For Requesting For Retailer As ".$shop_name." We Will Contact You Soon For Your Request ,"."\n".
			"Please Check Your Details : "."\n\n".
			"Retailer Name : ".$rname."\n".
			"Shop Name : ".$shop_name."\n".
			"Shop Address : ".$shop_address."\n".
			"Your Contact Number : ".$contact_number."\n".
			"Your Other Number : ".$other_number."\n".
			"Your Email Address : ".$email_id_retailer_request."\n".
			"Vat Number : ".$vat."\n".
			"Vat Date : ".$vat_date."\n".
			"CST Number : ".$cst."\n".
			"CST Date : ".$cst_date."\n\n".
			"If Any Query ,You Can Reply To This Email Also.."."\n\n\n".
			"Thanks & Regards ,"."\n\n".
			"Shivani Enterprise"
			);

		if($this->email->send())
			echo "Successfully Sent An Email To : <b>".$rname." (".$email_id_retailer_request.")"."</b>";
		else
			show_error($this->email->print_debugger())."\n";

	}

	function about_us()
	{
		$this->load->view('asms/asms_about_us.php',$this->load->view('asms/asms_home_header'));
	}

	function contact_us()
	{
		$this->load->view('asms/asms_contact_us.php',$this->load->view('asms/asms_home_header'));
	}

	function guest_feedback()
//-------------------------------------------Insert guest feedback data to tbl_Guest_Message--------------------------------------------
	{
		$this->load->model('/asms/asms_home_model');

		$guest_feedback_data=array(
			'name'=>$this->input->post('name1'),
			'email_id'=>$this->input->post('email1'),
			'contact_number'=>$this->input->post('contact_number1'),
			'subject'=>$this->input->post('subject1'),
			'comments'=>$this->input->post('comments')
			);

		//print_r($guest_feedback_data);

		$this->asms_home_model->guest_feedback_f($guest_feedback_data);
		//redirect("index.php/asms/home/index");

		echo "<script>
		     alert('Thank you for submitting feedback .. We will reach you soon..!! ');
			 window.location.href='index'; 
			 </script>";
//-------------------------------------------Email sending to admin (shivanisurat09@gmail.com) from guest------------------------------------
		$name1=$this->input->post('name1');
		$from_emailid=$this->input->post('email1');
		$subject1=$this->input->post('subject1');
		$contact_number1=$this->input->post('contact_number1');
		$comments=$this->input->post('comments');

		$this->load->library('email');
		$this->email->set_newline("\r\n"); 

		$this->email->from($from_emailid,'Feedback From Guest : '.$name1);
		$this->email->to('shivanisurat09@gmail.com');
		$this->email->subject($subject1);
		$this->email->message('Hello Admin ,'."\n\n"."New Feedback is arrived , Please Check Below Details : "."\n\n".
			"Guest Name : ".$name1."\n".
			"Feedback Type : ".$subject1."\n".
			"Comments : ".$comments."\n".
			$name1.'\'s Contact Number : '.$contact_number1."\n".
			$name1.'\'s Email Address : '.$from_emailid."\n");

		if($this->email->send())
			echo "Successfully Sent An Email To <b> Admin (shivanisurat09@gmail.com) !! </b> <br>";
		else
			show_error($this->email->print_debugger())."\n";

//-------------------------------------------Email sending to guest from shivani enterprise--------------------------------------------------

		$this->email->from('shivanisurat09@gmail.com','Shivani Enterprise');
		$this->email->to($from_emailid);
		$this->email->subject('Feedback Related');
		$this->email->message('Hello '.$name1." ,"."\n\n".
			"Good wishes and warm greetings !! "."\n\n".
			"Thank You For Providing Your Valuable Feedback To Us , We Will Reach You Soon , Please Check Your Feedback Details : "."\n\n".
			"Feedback Type : ".$subject1."\n".
			"Comments : ".$comments."\n".
			"Your Contact Number : ".$contact_number1."\n\n\n".
			"Thanks & Regards ,"."\n\n".
			"Shivani Enterprise"
			);

		if($this->email->send())
			echo "Successfully Sent An Email To : <b>".$name1." (".$from_emailid.")"."</b>";
		else
			show_error($this->email->print_debugger())."\n";
	}

	function subscribe()
	{
		$this->load->model('/asms/asms_home_model');
		
		$subscriber_data=array(
		'sub_name'=>$this->input->post('name_sub'),
		'sub_email'=>$this->input->post('email_sub')
			);

		$this->asms_home_model->subscribe_f($subscriber_data);

		echo
			"<script>
				alert('Thank you for subscribing our newsletter..!! ');
				window.location.href='index'; 
			</script>";


	}
}
?>