<html>  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title> 
      
      <script language="javascript">
         function update(rid){
         window.location="<?php echo base_url(); ?>index.php/asms/admin_index_controller/admin_update_retailer/"+rid;}
      </script>
      
   </head>  

<body>  

      <div class="col-md-12" style="height:1000px">
      <form action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/delete_retailer" method="POST" name="display_retailer">
         <table  class="table table-striped">
            <tr><th colspan="100" style="text-align:center">List Of All Retailers</th></tr>
            <tr class="success">
                  <th>Delete</th>
                  <th>Retailer Name</th>
                  <th>Shop Name</th>
                  <th>Shop Address:</th>
                  <th>Contact Number</th>
                  <th>Other Number</th>
                  <th>Email Address</th>
                  <th>VAT Number </th>
                  <th> Vat Date </th>
                  <th> CST Number </th>
                  <th> CST Date </th>
                  <th>Update</th>
               </tr>

         <?php foreach($posts as $post)
         {   
         ?>
            <tr class="active">
               <td><input type="checkbox" name="msg" value="<?php echo $post->rid;?>"></td>
               <td><?php echo $post->rname;?></td>
               <td><?php echo $post->shop_name;?></td>
               <td><?php echo $post->shop_address;?></td>
               <td><?php echo $post->contact_number;?></td>
               <td><?php echo $post->other_number;?></td>
               <td><?php echo $post->email_id;?></td>
               <td><?php echo $post->vat;?></td>
               <td><?php echo $post->vat_date;?></td>
               <td><?php echo $post->cst;?></td>
               <td><?php echo $post->cst_date;?></td>
               <td><input type="button" value="Update" class="btn btn-primary" onClick="update(<?php echo $post->rid;?>)" name="Update"></td>

            </tr>             
         <?php 
         }
         ?>
      <tr align="center">
         <td colspan="12"><input type="submit" class="btn btn-success" name="submit"></td>
      </tr>

   </table>
   </form>
</div>


















<!-- sIMPLE mETHOD


   <form name="display_retailer" method="POST" action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/delete_retailer">
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Delete </td>
            <td>Name</td>  
            <td>Shop Address</td>
            <td>Update</td>  
         </tr>  
         
         <?php foreach($posts as $post)
         {   
         ?>
         <tr>
            <td><input type="checkbox" name="msg" value="<?php echo $post->rid;?>"></td>
            <td><?php echo $post->rname;?></td>
            <td><?php echo $post->shop_address;?></td>
            <td><input type="button" value="Update" class="styled-button-5" onClick="update(<?php echo $post->rid;?>)" name="Update"></td>         
         </tr>    
         
         <?php 
         }
         ?>  

      <tr>
      <td colspan="4"><input type="submit" class="styled-button-5" name="submit"></td>
   </tr>
      </tbody>  
   </table>  -->
</body>  
</html>  