<!DOCTYPE html>
<html lang="en">
 <header>
 <meta http-equiv="Cache-Control" content="no-cache" />

  <title> Admin Panel </title>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/asms_css.css"> <!-- CSS For Home Page -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" /> <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/business-casual.css"); ?>"> <!-- Custom CSS -->
  <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" />-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.css">
  
  <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/jquery/core.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/sweetalert-master/dist/sweetalert.min.js"></script> <!-- Sweetalert -->
 <!--
   <!--Google Font API's (Fonts) 
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" 
  rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" 
  rel="stylesheet" type="text/css">
-->
  </header>

<body>
  <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
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
                    <li> <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/admin_home">Home</a> </li>
                                        
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li> <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/products_gallery">Products Gallery</a> </li>
                          <li><a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/products">Add Products</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Retailers <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/display_retailer"> List Of Retailers </a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/add_retailer">Add Retailers</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Subscribers <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/display_subscribers"> List Of Subscribers </a></li>
                          <li><a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/subscriber_message"> Message </a></li>
                        </ul>
                    </li>

                    <li> <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/search_by_date_report">Reports</a> </li>
                    <li><a href="#"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></a></li>

                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <?php 
                          $login_data = $this->session->userdata('session_data'); //Retriving session
                          echo $login_data['uname']; //Print the logge in username
                       ?>
                       <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url(); ?>index.php/asms/home/logout"> Logout </a></li>
                        </ul>
                    </li>

                     <li> <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/admin_notifications">
                     <span class="glyphicon glyphicon-bell" aria-hidden="true">
                     <?php 
                     $this->db->where('status',2);
                     $query=$this->db->get('tbl_Retailer_Request');
                     echo "(".trim($query->num_rows()).")";
                      ?>
                     </span></a></li>

                </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </header>
</body>
</html>
