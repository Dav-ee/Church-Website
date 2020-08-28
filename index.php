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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our big SEKUCU fahm</title>

    <link rel="stylesheet" type="text/css" href="css/index.css">
<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
 <!--    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery/index.html">Media</a></li> -->
              <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"aria-expanded="false" href="#">Media</a>
      <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>  </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="about_us/">About Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="events/">Events</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="contact_us/">Contact US</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="depart.php">Departments</a></li> 
  <li class="nav-item" role="presentation"><a class="nav-link" href="exe.php">Executive</a></li> 

         <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Portal</a></li> 

 <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li>  -->

                          <!--   <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More </a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="signup-page.php">Sign Up</a>
                                    <a class="dropdown-item" role="presentation" href="login-page.php">Login</a> 
                                </div>
                            </li> -->
                        
                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

<div class="box-for-slideshow"> 
<div class="galleryContainer">
    <div class="slideShowContainer">
        <div id="playPause" onclick="playPauseSlides()"></div>
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="images/img_1.jpg">1366X768
            <p class="captionText">Our Able Praise and Worship Team(ladies)</p>
        </div>
        <div class="imageHolder">
            <img src="images/img_2.jpg">
            <p class="captionText">Sunday service in progress.</p>
        </div>
        <div class="imageHolder">
            <img src="images/img_3.jpg">
            <p class="captionText">Our venue(LT2) for our service 7:00am-11:00am </p>
        </div>
        <div class="imageHolder">
            <img src="images/img_4.jpg">
            <p class="captionText">Praise and Worship Team</p>
        </div>
        <div class="imageHolder">
            <img src="images/img_5.jpg">
            <p class="captionText">Our Esteemed Serving Ushers</p>
        </div>
        <div class="imageHolder">
            <img src="images/img_6.jpg">
            <p class="captionText">Worship Night </p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>

<script src="js/myScript.js"></script>
</div>
 <p class="vision"> Our Mision: </p>
 <p class="my-text">
     
     -To proclaim the gospel in seku, the immediate region,around Kenya and entire world and to nature people to grow spiritually,socially,morally,academically, proffesionally,talent-wise and leadership-wise.
 </p>
        <p class="line"> </p>
        <p class="vision"> Our Vision: </p>
<p class="my-text"> -To be a family of well nurtured responsible Christians having Godly impact in the campus and the society</p>
        <p class="line"> </p>
         <p class="vision"> Core Values: </p>
<ul class="core-values">
<li>Holiness</li> 
<li>Faithfulness to the holy scripture</li> 
<li>    Unity</li> 
<li>Intergrity</li> 
<li>Excellence</li> 
</ul>
<p class="line"> </p>
 <p class="vision">Who are we? </p>
<p class="my-text" >We <strong>SEKU CU</strong>,We are a free interdenomination,ready to serve our lord with all our heart and soul.</p>
<p class="line"> </p>

<div style="margin-left:4%;font-size: 13px; display: none;">
<h5 style="font-weight: 650;">developers behind this website</h5>
<p>1)   KIPRONO DAVIES ~ G126/0633/2018</p>
<p>2)  PETER MWENDWA MUEMA ~  G126/0607/2018</p>
<p>3)  KELVIN WAMBUA  ~ G127/0977/2018</p>
<p>4)  ANN NYAMBURA ~  G127/0653/2018</p>
<p>5)  KIPROTICH BETT ALPHONES ~ G126/0631/2018</p>
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