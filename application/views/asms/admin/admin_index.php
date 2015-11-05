<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel</title>
    </head>

<body>
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
</body>
</html>
