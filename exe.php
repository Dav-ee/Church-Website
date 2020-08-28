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
<html>
<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKUCU Executives @2019-2020</title>
<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">

<link rel="stylesheet" type="text/css" href="css/exe.css">
</head>
<body>
	  <div id="page-container">
    <div id="content-wrap">

  <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    
                    <img class="logo" src="images/logo.png">
                <!--     <a class="navbar-brand" href="#">SEKUCU</a> -->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"aria-expanded="false" href="#">Media</a>
      <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>  </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="about_us/">About Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="events/">Events</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="contact_us/">Contact US</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="depart.php">Departments</a></li> 
  <li class="nav-item" role="presentation"><a class="nav-link" href="exe.php">Executive</a></li> 
      <!--    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Portal</a></li>  -->
          <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li> 
                                    

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


<p> <span class="bfr-img"><strong> SEKU CU Executive-Spiritual Year 2019-2020 </strong> </span></p>
<div class="my-images">  
<div class="card">
		<img src="images/exe/kimatu.jpg">
		<p><strong> -CU PATRON</strong><br>
		Dr. Kimatu</p>
	</div>
	<div class="card">
		<img src="images/exe/eric.jpg">
		<p><strong>-CHAIRPERSON-</strong> <br>
		Eric Barchokei</p>
	</div>
	<div class="card">
		<img src="images/exe/harison.jpg">
		<p><strong>-VICE CHAIRPERSON1-</strong> <br>
		Harrison Tinega</p>
	</div>
	<div class="card">
		<img src="images/exe/winny.jpg">
	<p><strong>-VICE CHAIRPERSON2-</strong><br>
	Winfred Masili</p>
	</div>
	<div class="card">
		<img src="images/exe/joy.jpg">
	<p><strong>-SECRETARY-</strong> <br>
	Joy Robert</p>
	</div>
	<div class="card">
		<img src="images/exe/noel.jpg">
	<p><strong>-VICE SECRETARY-</strong><br>
	Noel Kiplangat</p>
	</div>
	<div class="card">
		<img src="images/exe/samuel.jpg">
		<p><strong>-TREASURER-</strong> <br>
		Samuel Kirori</p>
			</div>
	<div class="card">
		<img src="images/exe/mary.jpg">
		<p><strong>-BIBLE STUDY-</strong> <br>
		Mary Nzioka </p>
	</div>
	<div class="card">
		<img src="images/exe/burundi.jpg">
		<p><strong>-INTERCESSORY-</strong><br>
		Eric Burundi </p>
	</div>
	<div class="card">
		<img src="images/exe/fred.jpg">
		<p><strong>-INSTRUMENTALIST-</strong><br>
		Fred Murwiri</p>
	</div>
		<div class="card">
		<img src="images/exe/dorcas.jpg">
		<p><strong>-USHERING AND CATERING-</strong> <br>
		Dorcas Mwende </p>
	</div>
		<div class="card">
		<img src="images/exe/victor-moses.jpg">
		<p><strong>-MISSION & EVANGELISM-</strong> <br>
		Victor Moses </p>
	</div>
	<div class="card">
		<img src="images/exe/lawrence.jpg">
		<p><strong>-PRAISE AND WORSHIP-</strong><br>
		Lawrence Gakuya </p>
	</div>
		<div class="card">
		<img src="images/exe/vincent.jpg">
		<p><strong>-CHOIR-</strong><br>
		Vincent Kibwange </p>
	</div>
 <!--   <div class="card">
		<img src="images/exe/feizar.jpg">
		<p><strong>-SENIOR ACTRESS-</strong><br>
		Faith Mutheu</p>
	</div> -->
	
</div>
</div>
<!-- end of my wrapper-->
<!-- Start of my footer -->
<div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>
</div>
</body>
</html>