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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>

<form action="<?php echo base_url(); ?>index.php/asms/home/login1" method="POST" name="login">
    <table width="380" height="200" align="center">
    <tr>
    <td><h4><b>User type :</b></h4></td>
    <td align="center">
<!-- 
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Dropdown
        <span class="selection"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="login_type">
        <li><a href="#" data-value="admin">Admin</a></li>
        <li><a href="#" data-value="retailer">Retailer</a></li>
        <li><a href="#" data-value="manufacture">Manufacture</a></li>
      </ul>
    </div>
-->

    <select name="login_type">
      <option value = "admin" selected>Admin </option>
      <option value="retailer">Retailer </option>
    </select>

        </td>
      </tr>

      <tr>
        <td><h4><b>Username : </b></h4></td>
        <td align="center"><input type="text" name="uname" placeholder="Enter Your Username.." style="text-align:center" required /></td>
      </tr>
      
      <tr>
          <td><h4><b>Password : </b></h4></td>
          <td align="center"><input type="password" name="password" placeholder="Enter Your Password.." style="text-align:center" required/></td>
      </tr>
  </table>
  
    <div align="center">
            <input class="btn btn-success" type="submit" name="submit" id="submit" value="Login" />
            <input class="btn btn-danger" type="reset" value="Reset" />
            <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" 
            onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';">
    </div>
    <br><br>
    </div>
  </div>
</div>
</form>
</body>
</html>