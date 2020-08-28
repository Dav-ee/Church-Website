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
  	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">

    <title>Upcoming Events</title>
<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Header-Dark.css">


    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
   
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
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
                             <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Media</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>
                            </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="../about_us/">About Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../events/">Events</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="../contact_us">Contact US</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link" href="../depart.php">Departments</a></li> 
  <li class="nav-item" role="presentation"><a class="nav-link" href="../exe.php">Executive</a></li> 
     <!--   <li class="nav-item" role="presentation"><a class="nav-link" href="../home.php">Portal</a></li>  -->

       <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li> 
       
                         <!--    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More </a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="../home.php">PORTAL</a> 
                                  <a class="dropdown-item" role="presentation" href="../signup-page.php">Sign Up</a>
                                    <a class="dropdown-item" role="presentation" href="../login-page.php">Login</a> 
                                </div>
                            </li> -->
                        </ul>
                </div>
            </nav>
        </div>
    </div>
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
     -->
    <section class="ftco-section">
      <div class="container">
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/church1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Feb. 10, 2020</a></div>
                  <div><a href="#">By Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-heart"></span> 8</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Sunday Services</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>Upcoming Sunday as FROM 07:00AM</span> <span><i class="icon-map-o"></i> Venue: Main Campus </span></p>
                <p>Service to be held at LT2 - Northern Block, as from 7:00AM -10:00AM</p>
            
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="#" class="block-20" style="background-image: url('images/worship-night.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Feb. 10, 2020</a></div>
                  <div><a href="#">By Admin</a></div>
               <div><a href="#" class="meta-chat"><span class="fa fa-heart"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Worship Night</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> DATE: Fri, 14th Feb. 2020 as FROM 8:00AM</span> <span><i class="icon-map-o"></i> Venue: Main Campus</span></p>
                <p>Function to be held at LT1 - TBH Block, as from 8:00PM-6:00AM..</p>
          
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Feb. 10, 2020</a></div>
                  <div><a href="#">By Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-heart"></span> 14</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">CU Fun Day</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>DATE: Sat, 7th March. 2020 as FROM  09:00AM</span> <span><i class="icon-map-o"></i> Venue: Main Campus, Graduation Square(GS)</span></p>
                <p>Come experience the fun we have as a Family</p>
      
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-4.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Feb. 10, 2020</a></div>
                  <div><a href="#">By Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-heart"></span> 6</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Bible Study</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>Every Tuesday as FROM 07:00PM-9:00PM</span> <span><i class="icon-map-o"></i> Venue: Main Campus-Hostels (Bible Study Leaders to Direct) </span></p>
                <p>Lets Dig in Together.</p>
              
              </div>
            </div>
          </div>

              <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-5.jpg');">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Feb. 10, 2020</a></div>
                  <div><a href="#">By Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-heart"></span> 5</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Environmental Day </a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>(Coming soon)</span> <span><i class="icon-map-o"></i> Venue: Main Campus-School Tree Farms</span></p>
                <p>Conservation of our environment.</p>
              
              </div>
            </div>
          </div>
          <!-- end of environment -->
              <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/event-6.jpg');">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Feb. 11TH-17TH, 2020</a></div>
                  <div><a href="#">By Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-heart"></span> 9</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Chastity Campaign</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 07:00AM-5:30PM</span> <span><i class="icon-map-o"></i> Venue: Main Campus-(More to be communicated)</span></p>
                <p>Theme: Keeping Our Lifes' Pure.</p>
              
              </div>
            </div>
          </div>
          <!-- end of chastity -->
        <div class="hori-text">
  <marquee> <p>  You cannot afford to miss any of these events!!!...#VICTORS IN CHRIST!!!! <p></marquee> 
</div>
<!-- end of marquee -->
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
		
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
  <script src="js/main.js"></script>
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