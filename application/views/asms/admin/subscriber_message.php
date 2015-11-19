<!DOCTYPE html>
<html>
<head>
	<title> Subscribe Message </title>
</head>
<body>

    <div class="col-md-10" style="text-align:center;margin-left:100px">
		<form name="subscriber_message" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/subscriber_message1">
        	 <table  class="table table-striped">
			
			<tr><th colspan="100" style="text-align:center"><h2>Send Messages To Subscriber</h2></th></tr>
			
			<tr class="active">
				<td><h4><b>Subject : </b></h4></td>
				<td><input type="text" name="subject_sub" class="form-control" required><br/></td>
			</tr>
			
			<tr class="active">
				<td><h4><b>Message : </b></h4></td>
        		<td><textarea name="message_sub" class="form-control" rows="7" required></textarea><br/></td>
        	</tr>
			
			<tr class="active">
				<td><h4><b>Upload File : </b></h4></td>
				<td><input type="file" name="uploadFile"><br></td>
			</tr>

			<tr class="active" align="center">
				<td colspan="100"><input type="submit" class="btn btn-success" style="width:100px" name="Submit"></td>
			</tr>

   			</table>
   		</form>
   </div>
<!--

	<form name="subscriber_message" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/subscriber_message1">
		<table  class="table table-striped">
			<tr><th colspan="100" style="text-align:center">Send Messages To Subscriber</th></tr>
			<tr class="active"><td>Subject : </td><td><input type="text" name="subject_sub" required><br/></td></tr>

			<tr class="active"><td>Message : </td><td>
        	<textarea name="message_sub" placeholder="Your Comments..." cols="35" rows="5" required></textarea><br/></td></tr>

			<tr class="active" align="center"><td colspan="100"><input type="submit" class="btn btn-success" name="Submit"></td></tr>
		</table>
	</form>-->
	
</body>
</html>

