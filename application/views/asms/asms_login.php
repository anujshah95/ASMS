<!--
<html>
	<head> <title> Login Page </title> </head>

	<body>
		<form action="<?php echo base_url(); ?>index.php/asms/home/login1" method="POST" name="login">
			<h1> Login </h1>
			Username : <input type="text" name="uname"><br>
			Password : <input type="password" name="password"><br>
			Login Type : 
				<select name="login_type">
					<option value="admin" selected> Admin </option>
					<option value="manufacture" selected> Manufacture </option>
					<option value="retailer" selected> Retailer </option>
				</select><br><br>
			<input type="submit" name="submit">
		</form>
	</body>

</html>
-->

<html>
  <head>
   <title> Shivani Enterprise </title>
  </head>

  <script type="text/javaScript">
 
  $(document).ready(function ()
  {
    $('#myModal').modal('show');
  });
  
  </script>

<body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
          <span aria-hidden="true">&times;</span></button><br>
        <h4>Sign in</h4>
        <div style="float:right; font-size: 125%; position: relative; top:-25px">
          <a href="<?php echo base_url() ;?>index.php/asms/home/forgot_password">Forgot password ? </a>
        </div>
      </div>
      <br>

<form action="<?php echo base_url(); ?>index.php/asms/home/login1" method="POST" name="login">
  <table width="380" align="center">
    <!-- 
        <select name="login_type">
          <option value = "admin" selected>Admin </option>
          <option value="retailer">Retailer </option>
        </select></td></tr>
    -->
    <tr><td><div class="form-group">
      <label for="login_type"><h5> User Type : </h5></label></td>
      <td> <select name="login_type" class="form-control">
          <option value = "admin" selected>  Admin  </option>
          <option value="retailer"> Retailer </option>
          <option value="manufacture">  Manufacture </option>
        </select>
    </div></td></tr>
  </table><br>

  <table width="400" height="200" align="center">

    <tr><td><div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="login-username" type="text" class="form-control" name="uname" value="" placeholder="Enter Your Username.." style="text-align:center" required>
    </div><br></td></tr>

    <tr><td><div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="login-password" type="password" class="form-control" name="password" placeholder="Enter Your Password.." style="text-align:center" required>
    </div><br></td></tr>
  
    <tr><td><div style="text-align:center" align="center">
      <input class="btn btn-success" type="submit" name="submit" id="submit" value="Login" />
      <input class="btn btn-danger" type="reset" value="Reset" />
      <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
    </div><br></td></tr>
      
    <tr><td><div align="right" class="form-group" >
      <div class="col-md-12 control">
        <div style="border-top: 1px solid#888; padding-top:15px; font-size:130%" > 
        Don't have an account ? 
        <a href="<?php echo base_url(); ?>/index.php/asms/home/retailer_request">Request Here</a>
        </div>
      </div></div></td></tr>

    </div>
  </table>
  <br><br>
  </div>
  </div>
</div>

</form>
</body>
</html>