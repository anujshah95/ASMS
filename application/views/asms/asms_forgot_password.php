
<html>
  <head>
   <title> Reset Password | Shivani Enterprise </title>
  </head>

  <script type="text/javaScript">
 
  $(document).ready(function ()
  {
    $('#myModal').modal('show');
  });
  
  </script>

<body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
          <span aria-hidden="true">&times;</span></button><br>
        <h4>Let's Reset Your Password</h4>
        <div style="float:right; font-size: 135%; position: relative; top:-35px">
          <a href="<?php echo base_url() ;?>index.php/asms/home/login">Login  </a>
        </div>
      </div>
      <br>

<form action="<?php echo base_url(); ?>index.php/asms/home/forgot_password1" method="POST" name="forgot_password">
  <table width="450" height="200" align="center">

    <tr><td><label for="reset_password">Before we start, we need a few details to keep your account secure. </label></td></tr>

    <tr><td ><div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="email" class="form-control" name="email_id" value="" placeholder="Enter Your Email Id ..." style="text-align:center" required>
    </div></td></tr>

  <!--  <tr><td><div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="login-password" type="password" class="form-control" name="password" placeholder="Enter Your Password.." style="text-align:center" required>
    </div><br></td></tr>
  -->
    <tr><td><div style="text-align:center" align="center">
      <input class="btn btn-success" type="submit" name="submit" id="submit" value="Reset Password" />
      <input class="btn btn-danger" type="reset" value="Clear" style="width:120px;" />
      <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" style="width:120px;"
       onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
    </div><br></td></tr>
    
    </table>
    
    </div>
    </table>
    <br><br>
    </div>
    </div>
</div>

</form>
</body>
</html>