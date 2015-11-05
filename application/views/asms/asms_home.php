<!DOCTYPE html>
<html>

<head>
	<title> Automotive Spare Parts Management System </title>	
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url("assets/images/logo/autogold.jpg"); ?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url("assets/images/logo/zip.jpg"); ?>"alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url("assets/images/logo/green_gold.jpg"); ?>" alt="">
                            </div>

                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url("assets/images/logo/naska.jpg"); ?>" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Shivani Enterprise</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Anuj Shah & Chirag Shah</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>
        
        <center>
        <form action="<?php echo base_url(); ?>index.php/asms/home/subscribe" method="POST" name="subscribe">
        <div class="row">
            <div class="box">
                <div class="form-group col-md-12 col-xs-12">
                    <hr><h2 class="intro-text text-center">Subscribe To Our Newsletter</h2><hr>
                    
                    <div class="col-md-4 col-xs-2">
                        <div class="input-group input-group-lg">
                          <input type="text" name="name_sub" class="form-control" placeholder="Name..." size="100" required>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="input-group input-group-lg">
                          <input type="email" name="email_sub" class="form-control" placeholder="Email address..." size="100`" required>
                        </div>
                    </div>
                    
                        <input type="submit" name="submit_sub" class="btn btn-success btn-lg" value="Subscribe !"> 

                    <!--<img class="img-responsive img-border img-left" src="<?php echo base_url("assets/images/intro-pic.jpg"); ?>" alt="">-->

                </div>
            </div>
        </div>
        </form>
        </center>

    </div>

<!--
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Beautiful boxes
                        <strong>to showcase your content</strong>
                    </h2>
                    <hr>
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Shivani Enterprise 2015</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>




</body>

</html>