<?php 
session_start();
if (isset($_SESSION['login_user']))

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
  	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">

    <title>Transparency is the Way</title>
<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="finance/Header-Dark.css">
     <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="finance/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="finance/animate.css">
    
    <link rel="stylesheet" href="finance/owl.carousel.min.css">
    <link rel="stylesheet" href="finance/owl.theme.default.min.css">
    <link rel="stylesheet" href="finance/magnific-popup.css">

    <link rel="stylesheet" href="finance/aos.css">

    <link rel="stylesheet" href="finance/ionicons.min.css">

    <link rel="stylesheet" href="finance/bootstrap-datepicker.css">
    <link rel="stylesheet" href="finance/jquery.timepicker.css">
  <link rel="stylesheet" href="finance/flaticon.css">
    <link rel="stylesheet" href="finance/icomoon.css">
     
    <link rel="stylesheet" href="finance/style.css">
  </head>
  <body>
      <div id="page-container">
    <div id="content-wrap">

     <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    
                    <img class="logo" src="images/logo.png">
                            <li style="list-style-type: none;" class="say-hi">
        <p style="color: #00BCD4;">Hi 
<?php echo $_SESSION['login_user'] ."!!"; ?>  </p>
<?php 
if (!$_SESSION['login_user']) {
header("location:login-page.php");
 } ?>
  </li>
                <!--     <a class="navbar-brand" href="#">SEKUCU</a> -->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="afterlogin.php">Home</a></li>
                               <li class="nav-item" role="presentation"><a class="nav-link" href="ex-bbs.php">Bible Study Registration</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="nomination.php">Nominations</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                                         <li class="nav-item" role="presentation"><a class="nav-link" href="finance.php">Finance</a></li>
                                    <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" target="blank">SEKUCU.ORG</a></li> -->
 <li class="nav-item" role="presentation"><a class="nav-link" href="http://sekucu.ml/" target="blank">SEKUCU.ORG</a></li>
                                     
                                     
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="Logout.php">Logout</a></li>

  <li style="list-style-type: none;" class="dont-say-hi">
        <p style="color: #00BCD4;">Hi 
<?php echo $_SESSION['login_user'] ."!!"; ?>  </p>
<?php 
if (!$_SESSION['login_user']) {
header("location:login-page.php");
 } ?>

  </li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>
<!-- end of nav bar -->
   <section class="ftco-counter ftco-intro" id="section-counter">
      <div class="container">
        <div class="row no-gutters">

          <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              <h3 class="mb-4">We serve over:</h3>   
                <strong class="number" data-number="2500">0</strong> members
                <span>Join our  growing family @SEKUCU.</span>
              </div>
            </div>
          </div>

           <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
               <h3 class="mb-4">Offerings:</h3> 
                <strong class="number" >8,500</strong>Kshs
                <span>Collected on: Sunday March. 29, 2020 Thank you all. Be blessed.</span>
              </div>
            </div>
          </div>

            <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                 <h3 class="mb-4">Development Funds:</h3>
                <strong class="number">70,500</strong> Kshs.
                <span>Total amount at hand.</span>
              </div>
            </div>
          </div>


          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
                <h3 class="mb-4">Donate Money</h3>
                <p>Quote: "Even the all-powerful Pointing has no control about the blind texts."</p>
                <p><a href="#getMoney" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                <h3 class="mb-4">Donate Food or Clothings</h3>
                <p>We accept all kind of donations.In monetary form of in asset form.</p>
                <p><a href="#getForm" class="btn btn-white px-3 py-2 mt-2">Donate Food</a></p>
              </div>
            </div>
          </div>
   		  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-4 align-items-stretch">
              <div class="text">
                <h3 class="mb-4">Be Our Sponsor</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                <p><a href="#getForm" class="btn btn-white px-3 py-2 mt-2">Be Our Sponsor</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	 <p style="text-align: center; font-weight: 650;">AS SEKU CU MEMBER YOU ARE PRIVILEDGED TO: </p>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">

                       <a name="getMoney"></a>

                       
                <h3 class="heading">Make a Donation</h3>
                <p>We Accept Donation Either Through Paypal,M-Pesa,Bank..etc</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Be Our Associate</h3>
                <p>Being our Patner is the best thing to happen:</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Sponsor Us</h3>
                <p>Wanna Be Our Sponsor?</p>
              </div>
            </div>    
          </div>
        </div>
      </div>
      <h2>PAYMENT METHODS</h2>

      <p>Payment Via M-PESA Can Be Made Through</p>
      <ol>
        <li>PAYBILL: <strong> *******  </strong></li>
        <li>Mobile number: <strong>07******** </strong> </li>
      </ol>
      <p>CASH </p>
       <ol>
        <li>Treasurer or any  relevant finance official <strong> *******  </strong></li>
      </ol>
    </section>
<!-- end of section 2 -->
	    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<a name="getForm"></a>
    			<h3 class="mb-3">Talk To US (DONATE,SPONSOR,MONEY)</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text"  required="required" class="form-control" placeholder="Your Full Name">
            </div>
            <div class="form-group">
              <input type="text" required="required" class="form-control" placeholder="Your Phone Number">
            </div>
            <div class="form-group">
              <input type="text"  required="required" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name=""  required="required" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="finance/js/jquery.min.js"></script>
  <script src="finance/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="finance/js/popper.min.js"></script>
  <script src="finance/js/bootstrap.min.js"></script>
  <script src="finance/js/jquery.easing.1.3.js"></script>
  <script src="finance/js/jquery.waypoints.min.js"></script>
  <script src="finance/js/jquery.stellar.min.js"></script>
  <script src="finance/js/owl.carousel.min.js"></script>
  <script src="finance/js/jquery.magnific-popup.min.js"></script>
  <script src="finance/js/aos.js"></script>
  <script src="finance/js/jquery.animateNumber.min.js"></script>
  <script src="finance/js/bootstrap-datepicker.js"></script>
  <script src="finance/js/jquery.timepicker.min.js"></script>
  <script src="finance/js/scrollax.min.js"></script>
  <script src="finance/js/main.js"></script>
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