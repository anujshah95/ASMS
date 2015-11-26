<?php


class home extends CI_Controller
{

	function __construct() 
	{
	    parent::__construct(); //check login, redirect if logged in or logging out
	}

	function preloader()
	{
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');

		$this->load->view('asms/asms_preloader');
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
			//print_r($query);
			
			//old method
			/*$login_data=array(
			'uname'=>$this->input->post('uname'),
			'is_logged_in'=>true
			);*/

			$login_data=$query;
			//echo $login_data[0]->email_id;

			$this->session->set_userdata('session_data',$login_data); // Sets the session

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
				redirect('index.php/asms/retailer_c/retailer_home');
			}

			else
			{

			}

		}
		else
			{
				/*echo 
				"<script>
			     	alert('Invalid Username or Password..!! ');
				 	window.location.href='login'; 
				 </script>";*/
				
				 $data['value']='login_error';
				 $this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
			}
	}

	function logout()
	{
//	    print_r($this->session->userdata('session_data'));
		$this->session->unset_userdata('session_data');
		$this->session->sess_destroy();

       	redirect('index.php/asms/home/index');
	}

	function products()
	{
		$this->load->view('asms/asms_products.php',$this->load->view('asms/asms_home_header'));
	}

	function retailer_request()
	{
		$this->load->view('asms/asms_retailer_request.php',$this->load->view('asms/asms_home_header'));
	}

	function retailer_request_error()
	{
		$this->load->view('asms/asms_retailer_request_error.php',$this->load->view('asms/asms_home_header'));
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
		'cst_date'=>$this->input->post('cst_date'),
		'status'=>'2'
		);
		//print_r($retailer_request_data);
    
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

		$this->session->set_userdata('rname',$rname);  // Sets the retailer data session
		$this->session->set_userdata('shop_name',$shop_name);
		$this->session->set_userdata('shop_address',$shop_address);
		$this->session->set_userdata('contact_number',$contact_number);
		$this->session->set_userdata('other_number',$other_number);
		$this->session->set_userdata('email_id',$email_id_retailer_request);
		$this->session->set_userdata('vat',$vat);
		$this->session->set_userdata('vat_date',$vat_date);
		$this->session->set_userdata('cst',$cst);
		$this->session->set_userdata('cst_date',$cst_date);

		setcookie("rname",$this->input->post('rname'), time()+3600);
		setcookie("shop_name",$this->input->post('shop_name'), time()+3600);
		setcookie("shop_address",$this->input->post('shop_address'), time()+3600);
		setcookie("contact_number",$this->input->post('contact_number'), time()+3600);
		setcookie("other_number",$this->input->post('other_number'), time()+3600);
		setcookie("email_id",$this->input->post('email_id'), time()+3600);
		setcookie("vat",$this->input->post('vat'), time()+3600);
		setcookie("vat_date",$this->input->post('vat_date'), time()+3600);
		setcookie("cst",$this->input->post('cst'), time()+3600);
		setcookie("cst_date",$this->input->post('cst_date'), time()+3600);


		$this->asms_home_model->retailer_request_f($retailer_request_data);
	
	//	setcookie("rname","", time()-3600);

		/*
		echo "<script>
	     alert('Thank you for submitting retailer request under Shivani Enterprise .. We will reach you soon..!! ');
		 window.location.href='index';
		</script>";
		*/
	}
	
	function retailer_request1_email()
	{	
       $rname = $this->session->userdata('rname'); //Retriving retailer data session
       $shop_name = $this->session->userdata('shop_name');
       $shop_address = $this->session->userdata('shop_address');
       $contact_number = $this->session->userdata('contact_number');
       $other_number = $this->session->userdata('other_number');
       $email_id_retailer_request = $this->session->userdata('email_id');
       $vat = $this->session->userdata('vat');
       $vat_date = $this->session->userdata('vat_date');
       $cst = $this->session->userdata('cst');
       $cst_date = $this->session->userdata('cst_date');
 
//-------------------------------------------Email sending to admin (shivanisurat09@gmail.com) from website------------------------------------

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

		$data['value']='retailer_request_success';
		$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));

		if($this->email->send())
			echo "Successfully Sent An Email To : <b>".$rname." (".$email_id_retailer_request.")"."</b>";
		else
			show_error($this->email->print_debugger())."\n";


		$this->session->unset_userdata('rname');  // Remove the retailer data session
		$this->session->unset_userdata('shop_name');
		$this->session->unset_userdata('shop_address');
		$this->session->unset_userdata('contact_number');
		$this->session->unset_userdata('other_number');
		$this->session->unset_userdata('email_id');
		$this->session->unset_userdata('vat');
		$this->session->unset_userdata('vat_date');
		$this->session->unset_userdata('cst');
		$this->session->unset_userdata('cst_date');

		$this->session->sess_destroy();

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
		/*
		echo "<script>
		     alert('Thank you for submitting feedback .. We will reach you soon..!! ');
			 window.location.href='index'; 
			 </script>";
		*/
		$data['value']='feedback_msg';
		$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));

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
		
		$sub_name=$this->input->post('name_sub');
		$sub_email=$this->input->post('email_sub');

		$this->session->set_userdata('sub_name',$sub_name);  // Sets the subscriber data session
		$this->session->set_userdata('sub_email',$sub_email);

		$subscriber_data=array(
		'sub_name'=>$this->input->post('name_sub'),
		'sub_email'=>$this->input->post('email_sub')
			);

		$this->asms_home_model->subscribe_f($subscriber_data);
	}

	function subscribe_email()
	{
      	$sub_name = $this->session->userdata('sub_name'); //Retriving subscriber data session
       	$sub_email = $this->session->userdata('sub_email');
                      
//-------------------------------------------Email sending to subscriber from shivani enterprise--------------------------------------------------
		$this->load->library('email');
		$this->email->set_newline("\r\n"); 
		$this->email->from('shivanisurat09@gmail.com','Shivani Enterprise');
		$this->email->to($sub_email);
		$this->email->subject('Subscriber Related');
		$this->email->message('Hello '.$sub_name." ,"."\n\n".
			"Good wishes and warm greetings !! "."\n\n".
			"Someone (hopefully you) Subscribe to Shivani Enterprise"."\n".
			"To learn more about Shivani Enterprise please visit www.shivanisurat.com"."\n\n".
		
			"Thanks & Regards ,"."\n".
			"Shivani Enterprise"."\n\n\n"
			);
		

		$data['value']='subscriber_success';
		$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));

		if($this->email->send())
			echo "Successfully Sent An Email To : <b>".$sub_name." ('From : ShivaniEnterprise')"."</b>";
		else
			show_error($this->email->print_debugger())."\n";

		$this->session->unset_userdata('sub_email'); // Remove the subscriber data session
		$this->session->unset_userdata('sub_name');
		$this->session->sess_destroy();

		//echo $this->session->userdata('sub_email');*/

	}

	function forgot_password()
	{
		$this->load->view('/asms/asms_forgot_password',$this->load->view('asms/asms_home_header'));
	}


	/*function forgot_password1()
	{
		$this->load->model('/asms/asms_home_model');
		$email_id=$this->input->post('email_id');

		$query=$this->asms_home_model->forgot_password_check_email();

		$rname=$this->session->userdata('rname');

		if($query)
			echo "yes";
		else
			echo "no";
	}*/

	function forgot_password1()
	{	
		$this->load->model('/asms/asms_home_model');
		$email_id=$this->input->post('email_id');

		$query=$this->asms_home_model->forgot_password_check_email();
		$rname=$this->session->userdata('rname');

		if($query)
		{
			$email_id=$this->input->post('email_id');

			function generate_password( $length = 8 ) 
			{
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
				$password = substr( str_shuffle( $chars ), 0, $length );
				return $password;	
			}
			$password=generate_password();

			$reset_password_data=array(
				'password'=>$password
				);
			$this->load->model('asms/asms_home_model');
			$this->asms_home_model->reset_password_f($reset_password_data,$email_id);

			//Reset password mail send to retailer from owner (shivanisurat09@gmail.com)
			
			$this->load->library('email');
			$this->email->set_newline("\r\n"); 

			$this->email->from('shivanisurat09@gmail.com','Reset Password');
			$this->email->to($email_id);
			$this->email->subject('Reset Password Related');
			$this->email->message("Hello ".$rname." ,"."\n\n".
				"Good wishes and warm greetings !! "."\n\n".
				"Congratulations , your password is successfully reset !!"."\n".
				"Please find your Login Credentials : "."\n\n".
				"New Password : ".$password."\n\n".
				"You can change this password after login .."."\n\n".
				"If any query ,You can reply to this email also.."."\n\n\n".
				"Thanks & Regards ,"."\n".
				"Shivani Enterprise"
				);

			if($this->email->send())
				echo "Successfully Sent An Email To <b> Retailer (".$email_id.") Who Requested!! </b> <br>";
			else
				show_error($this->email->print_debugger())."\n";
			//---------------------------------------------------------------------------------
			/*
			echo "<script>
			     	alert('Your password is reset , kindly get your password from your registered email address..!! ');
				 	window.location.href='login'; 
				 </script>";
			*/
			
			$data['value']='forgot_password_success';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
			//redirect('index.php/asms/home/login');
		}

		else
			{
			/*	echo "<script>
				alert('We are sorry .. This Email address is not registered with our website!! ');
				window.location.href='forgot_password'; 
				</script>";
			*/
			$data['value']='forgot_password_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
			}
			$this->session->unset_userdata('rname');
	}
}

?>