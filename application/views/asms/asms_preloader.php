<!DOCTYPE html>
<html>
<head>
	<title> Preloader </title>

 	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/preloader_main.css">
 	<script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2.min.js"></script>
 	<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"><\/script>')</script>

	<style type="text/css">
	  h1 {
	    height: 100%;
	    margin: 0;
	    font-size: 14px;
	    font-family: 'Open Sans', sans-serif;
	    font-size: 32px;
	    margin-bottom: 3px;
	    color: #EEEEEE;
	  }

	  .entry-header {
	    text-align: center;
	    margin: 0 auto 50px auto;
	    width: 80%;
	    max-width: 978px;
	    position: relative;
	    z-index: 10001;
	    padding-top: 100px;

	  }

	  .bottom-header{
	    text-align: center;
	    margin: 0 auto 50px auto;
	    width: 80%;
	    max-width: 978px;
	    position: relative;
	    z-index: 10001;
	    padding-top: 50px;
	  }

	  .redirecting{
	    text-align: center;
	    margin: 0 auto 50px auto;
	    width: 80%;
	    max-width: 978px;
	    position: relative;
	    z-index: 101;
	   	padding-top: 150px;
	  }

	 </style>

</head>

<body>

 	<div class="entry-header">
 		<h1>Welcome to Shivani Enterprise</h1>
 	</div>

	<div class="redirecting">
		<div class="cssload-loader"><h2>Redirecting</h2></div>
	</div>

 	<div class="bottom-header">
 		<h1>Please Wait ... </h1>
 	</div>

 	<script type="text/javaScript">

		$(document).ready(function()
		{
			setTimeout(function()
			{
			$('body').addClass('loaded');
			//$('h1').css('color','white');
			$('h1').hide();
			}, 3000);	
		});

		$(document).ready(function()
		{
			setTimeout(function()
			{	
			window.location='<?php echo base_url() ;?>index.php/asms/home/index'; 
			}, 5500);	
		});

	</script>

    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

</body>
</html>