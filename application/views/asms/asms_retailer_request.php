<!DOCTYPE html>
<html>
	<head>
		<title> Retailer Request Form </title>
	</head>
  
	<script type="text/javaScript">
	  	$(document).ready(function (){
    	$('#myModal').modal('show');
  		});
	</script>

<body>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h2 class="modal-title" id="myModalLabel" align="center"> Request For Retailership </h2>
	       	<h4 style="color:red" align="center"> Please Provide Accurate Details, </h4>
	       	<h4 style="color:red" align="center"> So We Can Verify Your Details... </h4>
	      </div>

	<form action="<?php echo base_url(); ?>index.php/asms/home/retailer_request1" method="POST" name="retailer_request" >
		<table width="380" height="200" align="center">
	    	<tr>
	    		<td><h4><b> Name :</b></h4></td> 
	    		<td align="center"> <input type="text" name="rname" required><br></td>
			</tr>
		
			<tr>
        		<td><h4><b>Shop Name : </b></h4></td>
		        <td align="center"><input type="text" name="shop_name" required><br></td>
			</tr>

			<tr>
        		<td><h4><b>Shop Address : </b></h4></td>
		        <td align="center"><input type="textarea" name="shop_address" required><br></td>
			</tr>

			<tr>
        		<td><h4><b>Contact Number : </b></h4></td>
		        <td align="center"><input type="tel" name="contact_number" pattern="[7-9]{1}[0-9]{9}" 
		        title="Please Enter Corrent Mobile Number" required><br></td>
			</tr>

			<tr>
        		<td><h4><b>Other Number : </b></h4></td>
		        <td align="center"><input type="number" name="other_number" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Email Adress : </b></h4></td>
		        <td align="center"><input type="email" name="email_id" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Vat Number : </b></h4></td>
		        <td align="center"><input type="text" name="vat" required></td>
			</tr>
			
			<tr>
        		<td><h4><b>Vat  Date : </b></h4></td>
		        <td align="center"><input type="date" name="vat_date" style="width:175px" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Cst Number : </b></h4></td>
		        <td align="center"><input type="text" name="cst" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Cst  Date : </b></h4></td>
		        <td align="center"><input type="date" name="cst_date" style="width:175px" required><br></td>
			</tr>
  		</table>
  			
   		<br><div align="center">
            <input class="btn btn-success" type="submit" name="submit" id="submit" value="Submit" />
            <input class="btn btn-danger" type="reset" value="Reset" />
            <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" 
            onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
    	</div>
    	<br><br>
	    </div>
	  </div>
	</div>
</form>

	<!--
	<form action="<?php echo base_url(); ?>index.php/asms/home/retailer_request1" method="POST" name="retailer_request" >
		<h1> Request For Retailership </h1>
		<h4 style="color:red"> Please Provide Accurate Details, So We Can Verify Your Details... </h4>
			Name : <input type="text" name="rname" required><br>
			Shop Name : <input type="text" name="shop_name" required><br>
			Shop Address : <input type="textarea" name="shop_address" required><br>
			Contact Number : <input type="tel" name="contact_number" pattern="[7-9]{1}[0-9]{9}"
			title="Please Enter Corrent Mobile Number" required><br>
			Other Number : <input type="number" name="other_number" required><br>
			Email Adress : <input type="email" name="email_id" required><br>
			Vat Number : <input type="text" name="vat" required>
			Vat  Date : <input type="date" name="vat_date" required><br>
			Cst Number : <input type="text" name="cst" required>
			Cst  Date : <input type="date" name="cst_date" required><br><br>
			<input type="submit" name="submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" value="Reset">
 	</form>
 	-->
	
	<!--	
		echo form_open('home/index');
		echo "Name : ".form_input('name',set_value('name','Enter Your Name'));
		echo "Shop Name : ".form_input('shop_name',set_value('shop_name'));
		echo "Shop Address : ".form_input('shop_address',set_value('shop_address'));
		echo "Contact Number : ".form_input('name',set_value('name','Enter Your Name'));
		echo "Name : ".form_input('name',set_value('name','Enter Your Name'));
		echo "Name : ".form_input('name',set_value('name','Enter Your Name'));
		echo "Name : ".form_input('name',set_value('name','Enter Your Name'));
		echo "Name : ".form_input('name',set_value('name','Enter Your Name'));
		echo "Name : ".form_input('name',set_value('name','Enter Your Name'));
	-->

</body>
</html>