retailer index

 <?php 
 	echo "<br>";
 	$login_data = $this->session->userdata('session_data'); //Retriving session
 	echo $login_data['uname']; //Print the logged in username
 ?>