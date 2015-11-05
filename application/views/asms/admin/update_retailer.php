

<!DOCTYPE html>
<html>
<head>
	<title> Retailer Form </title>
</head>



<?php foreach($posts as $post)
{            
	$rid=$post->rid;
	$rname=$post->rname;
	$shop_name=$post->shop_name;
	$shop_address=$post->shop_address;
	$contact_number=$post->contact_number;
	$other_number=$post->other_number;
	$email_id=$post->email_id;
	$vat=$post->vat;
	$vat_date=$post->vat_date;
	$cst=$post->cst;
	$cst_date=$post->cst_date;
}

?>
 
<body>
<!--
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>

<form action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/update_retailer" method="POST" name="update_retailer">
    <table width="380" height="200" align="center">
    <tr>
    <td><h4><b>Update Retailer Details :</b></h4></td>
    <td align="center">

	    	<tr>
	    		<td><h4><b> Name :</b></h4></td> 
	    		<td align="center"> <input type="text" name="rname" value="<?php echo $rname;?>" readonly required><br></td>
			</tr>
		
			<tr>
        		<td><h4><b>Shop Name : </b></h4></td>
		        <td align="center"><input type="text" name="shop_name" value="<?php echo $shop_name;?>" required><br></td>
			</tr>

			<tr>
        		<td><h4><b>Shop Address : </b></h4></td>
		        <td align="center"><input type="textarea" name="shop_address" value="<?php echo $shop_address;?>" required><br></td>
			</tr>

			<tr>
        		<td><h4><b>Contact Number : </b></h4></td>
		        <td align="center"><input type="tel" name="contact_number" pattern="[7-9]{1}[0-9]{9}" 
		        title="Please Enter Corrent Mobile Number" value="<?php echo $contact_number;?>" required><br></td>
			</tr>

			<tr>
        		<td><h4><b>Other Number : </b></h4></td>
		        <td align="center"><input type="number" name="other_number" value="<?php echo $other_number;?>" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Email Adress : </b></h4></td>
		        <td align="center"><input type="email" name="email_id" value="<?php echo $email_id;?>" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Vat Number : </b></h4></td>
		        <td align="center"><input type="text" name="vat" value="<?php echo $vat;?>" required></td>
			</tr>
			
			<tr>
        		<td><h4><b>Vat  Date : </b></h4></td>
		        <td align="center"><input type="date" name="vat_date" style="width:175px" value="<?php echo $vat_date;?>" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Cst Number : </b></h4></td>
		        <td align="center"><input type="text" name="cst" value="<?php echo $cst;?>" required><br></td>
			</tr>
			
			<tr>
        		<td><h4><b>Cst  Date : </b></h4></td>
		        <td align="center"><input type="date" name="cst_date" style="width:175px" value="<?php echo $cst_date;?>" required><br></td>
			</tr>
  		</table>
  			
   		<br><div align="center">
            <input class="btn btn-success" type="submit" name="submit" id="submit" value="Submit" />
            <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" 
            onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/admin_index_controller/admin_home';">
    	</div>
    	<br><br>
	    </div>
	  </div>
	</div>
</form>-->

      <div class="col-md-12" style="height:1000px">
	<form name="update_retailer" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/update_retailer">
	    <center>
	     <table  class="table table-striped">
	     
	     	<tr><th colspan="100" style="text-align:center">Update Retailer</th></tr>
			
			<tr class="success"><td>Name : <input type="text" name="rname" value="<?php echo $rname;?>" required readonly="readonly"><br></td></tr>
			<tr class="success"> <td >Shop Name : <input type="text" name="shop_name" value="<?php echo $shop_name;?>" required><br></td></tr>
			<tr class="success"><td>Shop Address : <input type="textarea" name="shop_address" value="<?php echo $shop_address;?>" required><br></td></tr>
			<tr class="success"><td>Contact Number : <input type="number" name="contact_number" value="<?php echo $contact_number;?>" required><br></td></tr>
			<tr class="success"><td>Other Number : <input type="number" name="other_number" value="<?php echo $other_number;?>" required><br></td></tr>
			<tr class="success"><td>Email Adress : <input type="email" name="email_id" value="<?php echo $email_id;?>" required><br></td></tr>
			<tr class="success"><td>Vat Number : <input type="text" name="vat" value="<?php echo $vat;?>" required></td></tr>
			<tr class="success"><td>Vat  Date : <input type="date" name="vat_date" value="<?php echo $vat_date;?>" required><br></td></tr>
			<tr class="success"><td>Cst Number : <input type="text" name="cst" value="<?php echo $cst;?>" required></td></tr>
			<tr class="success"><td>Cst  Date : <input type="date" name="cst_date" value="<?php echo $cst_date;?>" required><br><br></td></tr>
			<tr class="success"><td><input type="hidden" value="<?php echo $rid;?>" name="rid"></td></tr>
			<tr class="success"><td><input type="submit" class="btn btn-success" name="submit" value="Update"></td></tr>
 		
 	</table>
 	</center>
	</form>
	</div>
</body>
</html>