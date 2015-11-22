<?php

class admin_index_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('/asms/admin_crud_retailer_model');
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

	function admin_home()
	{
		if (!$this->is_logged_in())
		{
			$this->load->view('asms/admin/admin_home',$this->load->view('asms/admin/admin_home_header'));
		}

		/*$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');

		if($this->session->userdata('session_data')==TRUE)
		{			
			$this->load->view('asms/admin/admin_home',$this->load->view('asms/admin/admin_home_header'));
		}

		else
		{
			$data['value']='logout_error';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));
			//$this->load->view('asms/asms_home.php',$this->load->view('asms/asms_home_header'));
		}*/
	}

	function products_gallery()
	{
		if (!$this->is_logged_in())
		{
			$this->load->view('asms/admin/product_gallery',$this->load->view('asms/admin/admin_home_header'));
		}
	}

	function admin_notifications()
	{
		if (!$this->is_logged_in())
		{
			$this->data['posts'] = $this->admin_crud_retailer_model->display_retailer_request(); // calling Post model method getPosts()   		
   			$this->load->view('/asms/admin/admin_notifications',$this->data,$this->load->view('asms/admin/admin_home_header'));
   		}
	}

	function disapprove_request()
	{
		if (!$this->is_logged_in())
		{
		if($this->input->post('disapprove'))
		{
			$disapprove=$this->input->post('disapprove');
			$email_id=$this->input->post('email_id');
			$rname=$this->input->post('rname');
			$shop_name=$this->input->post('shop_name');

			$disapprove_change_status=array(
				'status'=>'0'
				);

			$this->admin_crud_retailer_model->disapprove_retailer_request($disapprove,$disapprove_change_status);

			//disapproval mail send to retailer from owner (shivanisurat09@gmail.com)
			
			$this->load->library('email');
			$this->email->set_newline("\r\n"); 

			$this->email->from('shivanisurat09@gmail.com','Retailer Request');
			$this->email->to($email_id);
			$this->email->subject('Retailer Request Related');
			//$emailbody='<h3> Respected Admin , <br> New Retaier Request is Arrived </h3>';

			$this->email->message('Hello '.$rname." ,"."\n\n".
				"Good wishes and warm greetings !! "."\n\n".
				"Sorry to inform you that your ".$shop_name." cannot be registered under Shivani Enterprise !!"."\n\n".
				"If Any Query ,You Can Reply To This Email Also.."."\n\n\n".
				"Thanks & Regards ,"."\n".
				"Shivani Enterprise"
				);

			$data['value']='approved_message';
			$data1['shop_name']='approved_retailer_shop_name';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/asms_home_header'));


			if($this->email->send())
				echo "Successfully Sent An Email To <b> Retailer (".$rname.") Who Requested!! </b> <br>";
			else
				show_error($this->email->print_debugger())."\n";
			//---------------------------------------------------------------------------------

			redirect('index.php/asms/admin_index_controller/admin_notifications');
		}

		else if($this->input->post('approve'))
		{
			$approve=$this->input->post('approve');

			$email_id=$this->input->post('email_id');
			$rname=$this->input->post('rname');
			$shop_name=$this->input->post('shop_name');

			$approve_change_status=array(
				'status'=>'1'
				);

			$r_username1=explode(' ',$shop_name);
			$r_username=$r_username1[0].'_'.$r_username1[1];

			function generate_password( $length = 8 ) 
			{
				$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
				$password = substr( str_shuffle( $chars ), 0, $length );
				return $password;	
			}
			
			$r_password=generate_password();

			$retailer_data=array(
			'rid'=>$this->input->post('approve'),
			'uname'=>$r_username,
			'password'=>$r_password,
			'email_id'=>$email_id,
			'type'=>'retailer'
			);
			//print_r($retailer_data);

			$this->admin_crud_retailer_model->approve_retailer_request($approve,$approve_change_status,$retailer_data);

			/* approval request and assigning username and password to retailer
			   send to retailer from owner (shivanisurat09@gmail.com)
			*/
			
			$this->load->library('email');
			$this->email->set_newline("\r\n"); 

			$this->email->from('shivanisurat09@gmail.com','Retailer Request');
			$this->email->to($email_id);
			$this->email->subject('Retailer Request Related');
			//$emailbody='<h3> Respected Admin , <br> New Retaier Request is Arrived </h3>';

			$this->email->message('Hello '.$rname." ,"."\n\n".
				"Good wishes and warm greetings !! "."\n\n".
				"Congratulations ".$rname." , your retailer request is approved under Shivani Enterprise ."."\n\n".
				"Here is your Login credentials : "."\n\n".
				"Username : ".$r_username."\n".
				"Password : ".$r_password."\n\n".
				"Now , you can login to our website."."\n\n".
				"If Any Query ,You Can Reply To This Email Also.."."\n\n\n".
				"Thanks & Regards ,"."\n".
				"Shivani Enterprise"
				);

			if($this->email->send())
				echo "Successfully Sent An Email To <b> Retailer (".$rname.") Who Requested!! </b> <br>";
			else
				show_error($this->email->print_debugger())."\n";

			//---------------------------------------------------------------------------------

			redirect('index.php/asms/admin_index_controller/admin_notifications');

		}

		else
		{

		}
		}
	}

	function add_retailer()
	{
		if (!$this->is_logged_in())
		{
			$this->load->view('/asms/admin/add_retailer',$this->load->view('asms/admin/admin_home_header'));
		}
	}

	function admin_add_retailer()
	{
		if (!$this->is_logged_in())
		{
		$retailer_data=array(
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

	

		$this->admin_crud_retailer_model->admin_crud_retailer_f($retailer_data);
		//redirect("index.php/asms/home/index");

		echo "<script>
		     alert('Succesfully Added New Retailer ..!! ');
		     window.location.href='add_retailer';  
			 </script>";
		}
	}

	function update_retailer()
	{
		if (!$this->is_logged_in())
		{
		$update_retailer_data=array(
			'rid'=>$this->input->post('rid'),
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

		$this->admin_crud_retailer_model->update_retailer($update_retailer_data);

		//print_r($update_retailer_data);
		echo "<script>
		     alert('Succesfully Updated Retailer Information..!! ');
		     window.location.href='display_retailer';  
			 </script>";
		}
	}

	function admin_update_retailer($id)
	{
		if (!$this->is_logged_in())
		{
		$rid=$id;
		//echo $rid;
		$temp['posts']  = $this->admin_crud_retailer_model->update_retailer_s($rid);	
		
		$this->load->view('/asms/admin/update_retailer', $temp,$this->load->view('asms/admin/admin_home_header'));
		}
	}

	function display_retailer()
	{
		if (!$this->is_logged_in())
		{
		//$this->load->model->('admin_add_retailer');
		$this->data['posts'] = $this->admin_crud_retailer_model->display_approved_retailer(); // calling Post model method getPosts()
   		$this->load->view('/asms/admin/display_retailer', $this->data,$this->load->view('asms/admin/admin_home_header'));
   		}
	}

	function delete_retailer()
	{
		if (!$this->is_logged_in())
		{	
		$data=$this->input->post('msg');
		
		$this->admin_crud_retailer_model->delete_retailer($data);
				
		echo 
		"<script>
		alert('Succesfully Deleted Retailer..!! ');
		window.location.href='display_retailer';  
		</script>";
		}
	}

	function products()
	{
		if (!$this->is_logged_in())
		{
			$this->load->view('asms/admin/add_products.php',$this->load->view('asms/admin/admin_home_header'));
		}
	}

	function add_products()
	{
		if (!$this->is_logged_in())
		{
		$img_file =$this->input->post('image_url');

		// Read image path, convert to base64 encoding
		$imgData = base64_encode(file_get_contents($img_file));
        
		$add_products_data=array(
			'product_name'=>$this->input->post('pname'),
			'manufacture_name'=>$this->input->post('mname'),
			'car_type'=>$this->input->post('car_type'),
			'product_type'=>$this->input->post('ptype'),
			'description'=>$this->input->post('description'),
			'image_url'=>$imgData,
			'price'=>$this->input->post('price'),
			'quantity'=>$this->input->post('quantity')
						);
		$this->admin_crud_retailer_model->add_products($add_products_data);
		
		echo "<script>
		     alert('Value inserted Successfully!! '); 
			 </script>";
	
		redirect('index.php/asms/admin_index_controller/admin_home');
		}	
	}

	function display_products()
	{
		if (!$this->is_logged_in())
		{
		$this->data['posts'] = $this->admin_crud_retailer_model->display_products();
   	
   		$this->load->view('/asms/admin/display_products', $this->data);
   		}
	}

	function search_by_date_report()
	{
		if (!$this->is_logged_in())
		{
		$this->load->model('asms/admin_search_by_date_model');

		$search_by_date_data=array(
			'shop_name'=>$this->input->post('shop_name'),
			'from'=>$this->input->post('from'),
			'to'=>$this->input->post('to')
		);

		$this->admin_search_by_date_model->admin_search_by_date_model_f($search_by_date_data);
		$search_by_date_data['products']=$this->admin_search_by_date_model->admin_search_by_date_model_f($search_by_date_data);
		$this->load->view('/asms/admin/admin_search_by_date',$search_by_date_data,$this->load->view('asms/admin/admin_home_header'));
		}
	}


	function subscriber_message()
	{
		if (!$this->is_logged_in())
		{
			$this->load->view('asms/admin/subscriber_message',$this->load->view('asms/admin/admin_home_header'));
		}
	}

	function subscriber_message1()
	{
		if (!$this->is_logged_in())
		{
			$this->load->model('asms/asms_admin_model');
			$subject=$this->input->post('subject_sub');
			$message=$this->input->post('message_sub');

			$data[]=$this->asms_admin_model->get_sub_emails();
			$sub_emails = array_column($data,'sub_email'); //print_r($sub_emails[0]);
			$sub_names = array_column($data,'sub_name');   //print_r($sub_names[0]);

			//echo implode('<br>',$sub_emails[0]);		
			
			/*
			$temp_emails=array('anuj.shah95@gmail.com','shivanisurat09@gmail.com','14030142063@sicsr.ac.in','shahanuj@aol.com');
			print_r($temp_emails);
			*/
			
			//----------------------------To upload file------------------------------------
		    $config['upload_path'] = './uploads/';
		    $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
		    $config['max_size'] = '5000';
		    //$config['max_width']  = '1024';
		    //$config['max_height']  = '768';

			$this->load->library('upload', $config);
	        $this->upload->initialize($config);

			if (!$this->upload->do_upload('uploadFile'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo "Error : ".print_r($error);
				$data['value']='attach_error';
				$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/admin/admin_home_header'));
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				//echo "Data : ".print_r($data);

				//foreach ($list as $sub_names[0] => $sub_emails[0]){
				$this->load->library('email');
				$this->email->set_newline("\r\n"); 

				$this->email->from('shivanisurat09@gmail.com','Shivani Enterprise');
				$this->email->to('shivanisurat09@gmail.com');
				$this->email->bcc($sub_emails[0]);
				$this->email->subject($subject);
				$this->email->message('Hello '."\n\n". $message);

				$upload_Data = $this->upload->data();
				$file_name=$upload_Data['file_name'];
				$pathToUploadedFile = $upload_Data['full_path'];
				$this->email->attach($pathToUploadedFile);

		    	//$path=$this->config->item('server_root');
		    	//$file=$path . '/ci/assets/attachments/';
		 
				$data['value']='sendmail_to_all_subscriber';
				$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/admin/admin_home_header'));
					
				if($this->email->send())
					echo "Successfully Sent An Email To <b><br> ". implode('<br>',$sub_emails[0])." </b> <br>";
				else
					show_error($this->email->print_debugger())."\n";

				// -----------------------Inserting subscriber data into tbl_Subscriber_Message database------------
				
				$subscriber_message_data=array(
					'subject'=>$subject,
					'message'=>$message,
					'file'=>$file_name."_".date('Y-m-d H:i:s')
					);

				$this->asms_admin_model->send_message_subscriber($subscriber_message_data);
			}
		}		
	}

	function display_subscribers()
	{
		if (!$this->is_logged_in())
		{
			$this->data['posts'] = $this->admin_crud_retailer_model->display_subscribers(); // calling Post model method getPosts()
   			$this->load->view('/asms/admin/display_subscribers', $this->data,$this->load->view('asms/admin/admin_home_header'));
   		}
	}

	function delete_subscriber()
	{	
		if (!$this->is_logged_in())
		{
			$sub_id=$this->input->post('sub_id');
			$this->admin_crud_retailer_model->delete_subscriber($sub_id);

			$data['value']='delete_subscriber';
			$this->load->view('asms/asms_sweet_alert',$data,$this->load->view('asms/admin/admin_home_header'));
		}
	}

}

?>