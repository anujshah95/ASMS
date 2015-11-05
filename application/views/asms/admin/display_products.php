<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Display Products</title> 
   </head>  
   <!--<form name="display_products" method="POST" action="<?php echo base_url(); ?>index.php/asms/products_c/delete_products">-->
   
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Delete </td>
            <td>Product Name</td>  
            <td>Image</td>
            <td>Description</td>  
         </tr>  
         
         <?php foreach($posts as $post){
            
            ?>
     <tr>
         <td><input type="checkbox" name="msg" value="<?php echo $post->product_id;?>"></td>
         <td><?php echo $post->product_name;?></td>

         <td><img src="data:image/jpeg;base64,<?php echo base64_encode($post->image_url)?>'"/></td>
         <td><?php echo $post->description;?></td>
      </tr>    
     <?php }?>  

      <tr>
      <td colspan="4"><input type="submit" class="styled-button-5" name="submit"></td>
   </tr>
      </tbody>  
   </table>  
<body>  
</body>  
</html>  