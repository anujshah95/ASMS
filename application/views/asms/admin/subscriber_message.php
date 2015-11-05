<<!DOCTYPE html>
<html>
<head>
	<title> Subscribe Message </title>
</head>
<body>

	<form name="subscriber_message" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/subscriber_message1">
		<table  class="table table-striped">
			<tr><th colspan="100" style="text-align:center">Send Messages To Subscriber</th></tr>
			<tr class="active"><td>Subject : </td><td><input type="text" name="subject_sub" required><br/></td></tr>

			<tr class="active"><td>Message : </td><td><input type="text" name="message_sub" required><br/></td></tr>

			<tr class="active" align="center"><td colspan="100"><input type="submit" class="btn btn-success" name="Submit"></td></tr>
		</table>
	</form>
	
</body>
</html>

<?php


?>