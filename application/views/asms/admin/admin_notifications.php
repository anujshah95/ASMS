<!DOCTYPE html>
<html>
	<head>
		<title>Notifications</title>
	</head>
	
	<br>
		<div class="col-md-12" style="height:1000px">
		
			<table  class="table table-striped" bgcolor="red">
				<tr><th colspan="100" style="text-align:center">Notifications</th></tr>
        		<tr class="success">
	        		<th>Retailer Name</th>
					<th>Shop Name</th>
	            	<th>Shop Address:</th>
	            	<th>Contact Number</th>
	            	<th>Other Number</th>
	            	<th>Email Address</th>
	            	<th>VAT Number </th>
	            	<th>Vat Date </th>
	            	<th>CST Number </th>
	            	<th>CST Date </th>
	            	<th>Approved</th>
	            	<th>Disapproved </th>
         		</tr>

         <?php foreach($posts as $post)
         {   
         ?>
         	<form action="<?php echo base_url() ;?>index.php/asms/admin_index_controller/disapprove_request/" method="POST" name="admin_notifications">
	         <tr class="active">
	            <td><input type="hidden" name="rname" value="<?php echo $post->rname; ?>"> <?php echo $post->rname; ?></td>
	            <td><input type="hidden" name="shop_name" value="<?php echo $post->shop_name; ?>"><?php echo $post->shop_name;?></td>
	            <td><input type="hidden" name="shop_address" value="<?php echo $post->shop_address; ?>"><?php echo $post->shop_address;?></td>
	            <td><input type="hidden" name="contact_number" value="<?php echo $post->contact_number; ?>"><?php echo $post->contact_number;?></td>
	            <td><input type="hidden" name="other_number" value="<?php echo $post->other_number; ?>"><?php echo $post->other_number;?></td>
	            <td><input type="hidden" name="email_id" value="<?php echo $post->email_id; ?>"><?php echo $post->email_id;?></td>
	            <td><input type="hidden" name="vat" value="<?php echo $post->vat; ?>"><?php echo $post->vat;?></td>
	            <td><input type="hidden" name="vat_date" value="<?php echo $post->vat_date; ?>"><?php echo $post->vat_date;?></td>
	            <td><input type="hidden" name="cst" value="<?php echo $post->cst; ?>"><?php echo $post->cst;?></td>
	            <td><input type="hidden" name="cst_date" value="<?php echo $post->cst_date; ?>"><?php echo $post->cst_date;?></td>
	            <td>
				<!-- 	            
				 <input type="hidden" name="approve" value="<?php echo $approve_id=$post->rid; ?>">
	             <input type="submit" class="btn btn-success" name="<?php echo $approve_id=$post->rid; ?>" value="Approve"
	             onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/admin_index_controller/approve_request('$approve_id')';">  
	             -->
	             <button type="submit" class="btn btn-warning" name="approve" value="<?php echo $approve_id=$post->rid; ?>">Approve</button>             	
	             </td>

                <td>
	                <!-- <input type="hidden" name="disapprove" value="<?php echo $disapprove_id=$post->rid; ?>"> -->
	                <!-- <input type="submit" class="btn btn-warning" name="<?php echo $disapprove_id=$post->rid; ?>" value="">  -->
	                <button type="submit" class="btn btn-warning" name="disapprove" value="<?php echo $disapprove_id=$post->rid; ?>">Disapprove</button>             	
	                <input type="hidden" name="email_id" value="<?php echo $email_id=$post->email_id; ?>">
                </td>
	         </tr>
	         </form>             
         <?php 
         }
         ?>

	</table>
	
	</div>
	<body>
	</body>
</html>
