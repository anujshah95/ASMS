<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" />
    <!-- Custom CSS -->
    

   
</head>

<body>
        <div id="wrapper">

        <!-- Sidebar -->
        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Welcome Admin
                        <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                    </a>
                </li>

                <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-users"></i>Retailer<i class="fa fa-fw fa-caret-down"></i><span class="caret"></span></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/add_retailer">Add Retailer</a>
                            </li>
 
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/display_retailer">Display Retailer</a>
                            </li>
                            
                        </ul>
                </li>
 
 
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/products">Add Products</a>
                            </li>
 
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/asms/admin_index_controller/display_products">Display Products</a>
                            </li>
                            
   


                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Log Out</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
     <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
      <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <!-- jQuery -->
    
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
