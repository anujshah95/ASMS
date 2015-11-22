<!DOCTYPE html>
<html>
<head>
 <header>
  <title>Sweet Alert</title>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.css">
  <script src="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.min.js"></script> <!-- Sweetalert -->

<script type="text/javascript">

var login='<?php echo $value ?>'
var forgot_password='<?php echo $value ?>'
var forgot_password_success='<?php echo $value ?>'
var retailer_request_success='<?php echo $value ?>'
var feedback_msg='<?php echo $value ?>'
var logout_error='<?php echo $value ?>'
var retailer_request_error='<?php echo $value ?>'
var subscriber_error='<?php echo $value; ?>'
var subscriber_success='<?php echo $value; ?>'
var delete_subscriber='<?php echo $value; ?>'
var sendmail_to_all_subscriber='<?php echo $value; ?>'
var attach_error='<?php echo $value; ?>'
/*
var approved_message='<?php echo value; ?>'
var approved_retailer_shop_name='<?php echo approved_retailer_shop_name ?>'
*/

if(login=='login_error')
{
		swal({
		  title: "Oops",
		  text: "<b>Incorrect Username or Password</b>",
		  type: "error",
		  confirmButtonColor: "#DD6B55",
		  closeOnConfirm: false,
		  html:true
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/login';
		});
}

if(forgot_password=='forgot_password_error')
{
		swal({
		  title: "Oops",
		  text: "<b>We are sorry .. This Email address is not registered with our website !! </b>",
		  type: "error",
		  confirmButtonColor: "#DD6B55",
		  closeOnConfirm: false,
		  html:true
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/forgot_password';
		});
}

if(forgot_password_success=='forgot_password_success')
{
		swal({
		  title: "Congratulations",
		  text: "<b>Your password is reset , kindly get your password from your registered email address..!!</b>",
		  type: "success",
		  confirmButtonColor: "#4F8A10", 
		  closeOnConfirm: false,
		  html:true
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/login';
		});
}

if(retailer_request_success=='retailer_request_success')
{
		swal({
		  title: "Done",
		  text: "<b>Thank you for submitting retailer request under <br> Shivani Enterprise .. We will reach you soon..!!</b>",
		  type: "success",
		  confirmButtonColor: "#4F8A10", 
		  closeOnConfirm: false,
		  html:true
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/index';
		});
}

if(feedback_msg=='feedback_msg')
{
		swal({
		  title: "Done",
		  text: "<b>Thank you for submitting feedback ..<br> We will reach you soon..!! </b>",
		  type: "success",
		  confirmButtonColor: "#4F8A10", 
		  closeOnConfirm: false,
		  html:true
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/index';
		});
}

if(logout_error=='logout_error')
{
	swal({
		title: "Oops",
		text: "<b>You need to login first..!! </b>",
		type: "error",
		confirmButtonColor: "red", 
		closeOnConfirm: false,
		html:true
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/login';
		});

}

if(retailer_request_error=='retailer_request_error')
{
	swal({
		title: "Oops",
		text: "<b>Sorry , Duplicate Entry Found..!! <br><br> If any query please write feedback from our home page !! </b>",
		type: "error",
		confirmButtonColor: "red", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/retailer_request_error';
		});
}

if(subscriber_error=='subscriber_error')
{
	swal({
		title: "Oops",
		text: "<b>Sorry , Email Id is already registered..!! <br><br> If any query please write feedback from our home page !! </b>",
		type: "error",
		confirmButtonColor: "red", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home';
		});
}

if(subscriber_success=='subscriber_success')
{
	swal({
		title: "Done",
		text: "<b>You are now subscribed !! <br><br> Now , you will get latest news & information <br>of our website !! </b>",
		type: "success",
		confirmButtonColor: "#4F8A10", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home';
		});
}


//-----------------------------------------Admin -----------------------------------------------------------------------

if(delete_subscriber=='delete_subscriber')
{
	swal({
		title: "Done",
		text: "<b>Successfully Deleted Subscriber !! </b>",
		type: "success",
		confirmButtonColor: "#4F8A10", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/admin_index_controller/display_subscribers';
		});
}

if(sendmail_to_all_subscriber=='sendmail_to_all_subscriber')
{
	swal({
		title: "Done",
		text: "<b>Sent mail to all subscribers !! </b>",
		type: "success",
		confirmButtonColor: "#4F8A10", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/admin_index_controller/subscriber_message';
		});
}

if(attach_error=='attach_error')
{
	swal({
		title: "Oops",
		text: "<b>Attachment size and Format should be followe as per criteria </b>",
		type: "error",
		confirmButtonColor: "red", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/admin_index_controller/subscriber_message';
		});
}

/*
if(approved_message=='approved_message')
{
	swal({
		title: "Success",
		text: '<b> <?php echo $approved_retailer_shop_name ?> Request Approved !! </b>',
		type: "success",
		confirmButtonColor: "#4F8A10", 
		closeOnConfirm: false,
		html:true
		},
		function(){
			//redirect('<?php echo base_url() ;?>index.php/asms/home/retailer_request','refresh');
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/admin_index_controller/admin_notifications';
		});
}
*/



/*
swal({
  title: "Are you sure?",
  text: "Your will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/index';
});
*/

/*
swal({
	title: "An input!",
	text: "Write something interesting:",
	type: "input",   showCancelButton: true,
	closeOnConfirm: false,   animation: "slide-from-top",
	inputPlaceholder: "Write something" },

	function(inputValue)
		{
			if (inputValue === false) return false;
				if (inputValue === "")
					{
						swal.showInputError("You need to write something!");
						return false
					}
		swal("Nice!", "You wrote: " + inputValue, "success");
		});
/*

sweetAlert("Oops...", "Something went wrong!", "error");
*/



/*
swal({
   title: 'Confirm',
   text: 'Are you sure to delete this message?',
   type: 'warning',
   showCancelButton: true,
   confirmButtonText: 'Yes, sir',
   cancelButtonText: 'Not at all'
});
*/

</script>

</head>
<body>
		
</body>
</html>
