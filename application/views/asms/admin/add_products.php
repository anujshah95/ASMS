<!DOCTYPE html>
<html>
<head>
	<title> Products </title>
</head>

<body>
	<form name="add_products" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/add_products" enctype="multipart/form-data">
	       <table  class="table table-striped">
	       		 <tr><th colspan="100" style="text-align:center">Add Products</th></tr>
			<tr class="active"><td>Product Name : </td><td><input type="text" name="pname" required><br></td></tr>
			<tr class="active"><td>Manufacture Name : </td><td><select name="mname">
				<option value="Select One">Select One</option>
				<option value="Auto Gold">Auto Gold</option>
				<option value="Zip Filter">Zip Filter</option>
				<option value="DJLM">DJLM</option>
				<option value="Nachi">Nachi</option>
			</select><br /></td></tr>
			<tr class="active"><td>Car Type : </td><td><select name="car_type">
				<option value="Select One">Select One</option>
				<option value="Innova">Innova</option>
				<option value="Tavera">Tavera</option>
				<option value="Zip Filter">Alto</option>
				<option value="DJLM">DJLM</option>
				<option value="Nachi">Nachi</option>
			</select><br /></td></tr>
			<tr class="active"><td>Product Type : </td><td><select name="ptype">
				<option value="Select One">Select One</option>
				<option value="Head Light">Head Light</option>
				<option value="Side Light">Side Light</option>
				<option value="Air Filter">Air Filter</option>
				<option value="AC Filter">AC Filter</option>
			</select><br /></td></tr>
			<tr class="active"><td>Description: </td><td><input type="textarea" name="description" required><br></td></tr>
			<tr class="active"><td>Upload Image : </td><td><input type="file" name="image_url"><br></td></tr>
			<tr class="active"><td>Price : </td><td><input type="text" name="price" required><br></td>
			<tr class="active"><td>Quantity : </td><td><input type="text" name="quantity"><br></td></tr>
			<tr class="active" align="center"><td colspan="100"><input type="submit" class="btn btn-success" name="submit"></td></tr>
 	</form>
		
</body>
</html>