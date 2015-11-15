<!DOCTYPE html>
<html lang="en">
 <header>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/asms_css.css"> <!-- CSS For Home Page -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" /> <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/business-casual.css"); ?>"> <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.css">
  
  <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/jquery/core.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.min.js"></script> <!-- Sweetalert -->

     <!--Google Font API's (Fonts) 
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" 
    rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" 
    rel="stylesheet" type="text/css">-->
  

  </header>

<body>

  <!-- Logo
    <a class="logo pull-left" href="<?php echo base_url(); ?>index.php/asms/home/index">
      <img src="<?php echo base_url("assets/images/smile.jpg"); ?>" alt="" />
    </a>
  -->

    <div class="brand">Shivani Enterprise</div>
    <div class="address-bar"> Gayatri Society | Surat , 395009 | 1800 833 1008 </div>

    <!-- Navigation -->
       <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <nav id="bs-navbar" class="collapse navbar-collapse">              
                <ul class="nav navbar-nav">
                    <li> <a href="<?php echo base_url(); ?>index.php/asms/home/index">Home</a> </li>
                    <li> <a href="<?php echo base_url(); ?>index.php/asms/home/login">Login</a> </li>
                    <li> <a href="<?php echo base_url(); ?>index.php/asms/home/products">Products</a> </li>
                    <li> <a href="<?php echo base_url(); ?>index.php/asms/home/retailer_request">Retailer Request</a> </li>
                    <li> <a href="<?php echo base_url(); ?>index.php/asms/home/about_us">About Us</a> </li>
                </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Simple Code Without Bootstrap
<center>
<h1> Shivani Enterprise </h1>
     <a href="<?php echo base_url(); ?>index.php/asms/home/index"> Home </a>&nbsp;
     <a href="<?php echo base_url(); ?>index.php/asms/home/login"> Login </a>&nbsp;
    <a href="<?php echo base_url(); ?>index.php/asms/home/products"> Products </a>&nbsp;
    <a href="<?php echo base_url(); ?>index.php/asms/home/retailer_request"> Retailer Request </a>&nbsp;
    <a href="<?php echo base_url(); ?>index.php/asms/home/about_us"> About Us </a>&nbsp;
</center>
-->

<!-- Old Feedback Form-->
<form action="<?php echo base_url(); ?>index.php/asms/home/guest_feedback" method="POST" name="guest_feedback_form">
  <div class="feedback" style="z-index:10">
    <a id="feedback_button"><img src="<?php echo base_url(); ?>assets/images/feedback.png"></a>
      <div class="form">
        <h4 style="color:white"> Please Provide Accurate Details,<br> So We Can Contact You Soon... </h4>

         <input type="text" name="name1" class="name" placeholder="Your Good Name" required><br><br>
         <input type="email" name="email1" class="email" placeholder="Email Address" required><br><br>
         <input type="tel" name="contact_number1" class="contact" placeholder="Contact Number" pattern="[7-9]{1}[0-9]{9}" 
         title="Please Enter Corrent Mobile Number" required><br><br>

         <select id="subject1" name="subject1" class="span" required>
          <option selected disabled value=""> Choose Feedback Category </option>
          <option value = "Love The All New Products" > Love The All New Products </option>
          <option value = "Can Get Better"> Can Get Better </option>
          <option value = "Add Some More Feature"> Add Some More Feature </option>
          <option value = "Issue With The Page / Report A Bug"> Issue With The Page / Report A Bug</option>
          <option value = "Retailer Request Issue"> Retailer Request Issue </option>
          <option value="Login Related Issue"> Login Related Issue</option>
          <option value="Products Related"> Products Related</option>
          <option value="Other"> Other - Speak Out Your Heart </option>
        </select><br><br>

        <textarea name="comments" class="message" placeholder="Your Comments..." cols="35" class="span" rows="5" required></textarea><br><br>

        <input type="submit" name="submit" class="btn btn-success" >&nbsp;&nbsp;
        <input type="cancel" class="btn btn-default" value="Cancel" 
        onclick="javascript:window.location='<?php echo base_url() ;?>index.php/asms/home/index';"> &nbsp;&nbsp;
        <input type="reset" value="Reset" class="btn btn-danger" >&nbsp;&nbsp;

      </div>
      </div>
  </div>
</form>
</div>
</div>
</form>
</body>
</html>
