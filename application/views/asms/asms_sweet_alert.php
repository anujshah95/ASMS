<!DOCTYPE html>
<html>
<head>
	<title></title>


<script type="text/javascript">

var login='<?php echo $value ?>'
var forgot_password='<?php echo $value ?>'
var forgot_password_success='<?php echo $value ?>'
var retailer_request_success='<?php echo $value ?>'
var feedback_msg='<?php echo $value ?>'
var logout_error='<?php echo $value ?>'

if(login=='login_error')
{
		swal({
		  title: "Oops",
		  text: "Incorrect Username or Password",
		  type: "error",
		  confirmButtonColor: "#DD6B55",
		  closeOnConfirm: false
		},
		function(){
		    window.location.href = '<?php echo base_url() ;?>index.php/asms/home/login';
		});
}

if(forgot_password=='forgot_password_error')
{
		swal({
		  title: "Oops",
		  text: "We are sorry .. This Email address is not registered with our website!!",
		  type: "error",
		  confirmButtonColor: "#DD6B55",
		  closeOnConfirm: false
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
		  text: "<b>Thank you for submitting feedback .. We will reach you soon..!! </b>",
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
