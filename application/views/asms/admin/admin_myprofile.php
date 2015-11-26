<!DOCTYPE html>
<html>
<head>
	<title> My Profile | Admin </title>
</head>

<script type="text/javascript">
	
	$(document).ready(function() {
	  $("#newRPwd").keyup(validatePassword);
	  $("#newPwd").keyup(validatePassword);
	});

	function validatePassword() 
	{
	    if($("#newPwd").val(),$("#newRPwd").val() == "") 
	    {
	       $("#validateStatus").text("Password can't be blank");
	       $("#updateButton").attr('disabled',true);
	    }
	    else if($("#newPwd").val() == $("#newRPwd").val())
		{
	       $("#validateStatus").text("Good !! Password Matched");
	       $("#updateButton").attr('disabled',false);
		}
		else
	    {
	        $("#validateStatus").text("Oops !! Password do not match");
	        $("#updateButton").attr('disabled',true);
	    }
	}

</script>

<body>

	<?php
		$login_data = $this->session->userdata('session_data'); //Retriving session
	?>

	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="panel panel-default">
                	<div class="panel-heading" style="text-align:center"> <strong class=""><h3>Edit Profile</h3></strong></div>
                		<div class="panel-body">

                        	<div class="row">
                                <div class="col-sm-3">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a href="#userProfile" data-toggle="tab"> <i class="glyphicon glyphicon-user"></i> User Profile </a></li>
                                        <li><a href="#changePassword" data-toggle="tab"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                                   	</ul>
                                </div>
                        
								<div class="col-sm-9">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="userProfile">
                                               	<div class="form-group">
                                                    <label>User Name </label>
                                                    <input type="text" name="uname" class="form-control" value="<?php if($login_data) echo $login_data[0]->uname; ?>" readonly="true"><br>

                                                    <label>User Type </label>
                                                    <input type="text" name="utype" class="form-control" value="<?php if($login_data) echo $login_data[0]->type; ?>" readonly="true"><br>

                                                    <label>Email Id </label>
                                                    <input type="text" name="email_id" class="form-control" value="<?php if($login_data) echo $login_data[0]->email_id; ?>" readonly="true">                                                        
                                                </div>
                                                            
                                                <!--<button type="submit" class="btn btn-success">Update Profile</button>-->
                                        </div>

	                                    <div class="tab-pane fade" id="changePassword">
	                                        <form role="form" method="post" action="<?php echo base_url();?>index.php/asms/admin_index_controller/changePassword_admin">
	                                            <div class="form-group"></div>
	                                                <div class="form-group">
	                                                    <label>Old Password</label>
	                                                    <input type="password" class="form-control" name="oldPwd" required>
	                                                       
	                                                    <br><label>New Password</label>
	                                                    <input type="password" class="form-control" name="newPwd" id="newPwd" pattern=".{8,}" title="Eight or more characters" required>
	                                                           
	                                                    <br><label>Re-type New Password</label>
	                                                    <input type="password" class="form-control" name="newRPwd" id="newRPwd" required onfocusout="checkPassword();">

	                                                    <br><label id="validateStatus"></label>
	                                                </div>
	                                                            
	                                                 <input type="submit" class="btn btn-success" value="Update Password" id="updateButton" disabled="true">
        											 <input type="button" class="btn btn-danger" value="Cancel" 
        											onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/admin_index_controller/admin_profile';">
	                                        </form>
	                                    </div><!-- Change password -->

                                    </div> <!-- tab-content-->
                                </div><!--class of 9 rows -->
                            </div><!--inner Row-->
                        </div><!--panel body-->
                    </div> <!-- panel default -->
                </div> <!-- 12 column -->
            </div> <!-- main Row -->
    	</div><!--container-->

</body>
</html>