<html>  
   <head>  
      <title>List Of Subscribers</title>       
      <style type="text/css">
      th
      {
         text-align:center;
      }

      </style>
   </head>  

<body>  
      <div class="col-md-10" style="text-align:center;margin-left:100px">
      <form action="<?php echo base_url(); ?>index.php/asms/admin_index_controller/delete_subscriber" method="POST" name="display_retailer">
         <table  class="table table-striped" >
            <tr><th colspan="100"><h3>List Of Subscribers</h3></th></tr>
            <tr class="success">
                  <th  >Delete</th>
                  <th >Subscriber Name</th>
                  <th >Subscriber Email</th>
               </tr>

         <?php foreach($posts as $post)
         {   
         ?>
            <tr class="active">
               <td ><input type="checkbox" name="sub_id" value="<?php echo $post->sub_id;?>"></td>
               <td ><?php echo $post->sub_name;?></td>
               <td><?php echo $post->sub_email;?></td>               
            </tr>             
         <?php 
         }
         ?>
      <tr align="center">
         <td colspan="12"><input type="submit" class="btn btn-success" style="width:100px" name="submit"></td>
      </tr>

   </table>
   </form>
   </div>
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