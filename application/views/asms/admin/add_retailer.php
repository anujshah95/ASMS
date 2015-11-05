<!DOCTYPE html>
<html>
<head>
	<title> Retailer Form </title>
</head>

<body>
	<form name="retailer_request" method="POST"action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/admin_add_retailer">
		<table  class="table table-striped">
		   <tr><th colspan="100" style="text-align:center">Add Retailer</th></tr>
		    <tr class="active"><td> Name : </td><td><input type="text" name="rname" required><br></td></tr>
			<tr><td>Shop Name : </td><td><input type="text" name="shop_name" required><br></td></tr>
			<tr class="active"><td>Shop Address : </td><td><input type="textarea" name="shop_address" required><br></td></tr>
			<tr><td>Contact Number : </td><td><input type="number" name="contact_number" required><br></td></tr>
			<tr class="active"><td>Other Number : </td><td><input type="number" name="other_number" required><br></td></tr>
			<tr><td>Email Adress : </td><td><input type="email" name="email_id" required><br></td></tr>
			<tr class="active"><td>Vat Number : </td><td><input type="text" name="vat" required></td></tr>
			<tr><td>Vat  Date : </td><td><input type="date" name="vat_date" required><br></td></tr>
			<tr class="active"><td>Cst Number : </td><td><input type="text" name="cst" required></td></tr>
			<tr><td>Cst  Date : </td><td><input type="date" name="cst_date" required><br><br></td></tr>
			<tr align="center"><td colspan="12"><input type="submit" class="btn btn-success"name="submit"></td></tr>
		</table>
 	</form>
		
</body>
</html>