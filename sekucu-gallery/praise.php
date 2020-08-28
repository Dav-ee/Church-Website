<?php
// require https
if ($_SERVER['HTTPS'] != "on") {
  $url="https://".
  $_SERVER['SERVER_NAME'].
  $_SERVER['REQUEST_URL'];
  header("location:$url");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

   <title>Gallery-Reminder of our past</title>
   
<link rel="stylesheet" href="css/Header-Dark.css">
<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
      <div id="page-container">
    <div id="content-wrap">

    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    
                    <img class="logo" src="images/logo.png">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>
              <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"aria-expanded="false" href="#">Media</a>
      <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="index.php">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>  </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="../about_us/">About Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../events/">Events</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="../contact_us/">Contact US</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="../depart.php">Departments</a></li> 
  <li class="nav-item" role="presentation"><a class="nav-link" href="../exe.php">Executive</a></li> 
        <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="../home.php">Portal</a></li>  -->
  <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END nav -->


 <div class="hero-wrap" style="background:black;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="#">Home</a></span> <span>Gallery</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">PRAISE && WORSHIP Gallery</h1>
          </div>
        </div>
      </div>
    </div>




    <section class="ftco-section ftco-gallery">
    	<div class="container">
	    	<div class="d-md-flex">
		    	<a href="images/pp-2.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-2.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-3.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-3.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-4.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-4.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-5.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-5.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
	    	</div>
	    	<div class="d-md-flex">
		    	<a href="images/pp-6.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-6.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-7.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-7.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-8.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-8.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	
		    		<a href="images/pp-13.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-13.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    </div>
		    <div class="d-md-flex">
		    	<a href="images/pp-10.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-10.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-11.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-11.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    	<a href="images/pp-12.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-12.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
	
		    	<a href="images/pp-9.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/pp-9.JPG);">
		    		<div class="icon d-flex justify-content-center align-items-center">
		    			<span class="icon-search"></span>
		    		</div>
		    	</a>
		    </div>
	    </div>
    </section>
    <footer style="text-align: center;">
        <p>
        SEKU CU <br>
        | Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
    </p>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>