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
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find us on..</title>
	<!-- my favicon -->
        <link rel="icon" type="image/ico" href="../images/favicon.ico" /> 

	<link rel="stylesheet" type="text/css" href="stylesheet.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">

</head>
<body style=" background: rgb(19,89,121);">
	<div id="page-container">
    <div id="content-wrap">


 <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    
                    <img class="logo" src="../images/logo.png">
                <!--     <a class="navbar-brand" href="#">SEKUCU</a> -->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>
                              <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="gallery/index.php">Media</a></li> -->
                                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Media</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>
                            </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="../about_us/">About US</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../events/">Events</a></li>
                                     
                                       <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Contact Us</a></li>
                                       <li class="nav-item" role="presentation"><a class="nav-link" href="../depart.php">Departments</a></li>
                                       <li class="nav-item" role="presentation"><a class="nav-link" href="../exe.php">Executive</a></li> 
                                    <!--   <li class="nav-item" role="presentation"><a class="nav-link" href="../home.php">Portal</a></li> -->
                                       <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li>

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

<!-- 	<div class="header">
		<h1 style="font-size: 50px; text-align: center; text-decoration: underline;">Contact Us</h1>
	</div> -->
	<div id="container">
	<p style="font-size: 20px;">Feel free to visit us on our social media platforms:</p>

	
  <div class="paragragh">
	<p>
			<a href="www.facebook.com/sekucu"><img src="images/fb.png" width="80" height="70"></a><br>
		 <strong>Like us on our facebook page</strong><br>
		visit our facebook page and like <br>
		<a href="www.facebook.com/sekucu" style="color: orange; text-decoration:underline;">LIKE</a>
	</p>
  </div>
    
  <div class="paragragh">	<p>
<a href="www.twitter.com//sekucu"> 	<img src="images/twitter bird.png" width="100" height="70"></a><br>
	
		<strong>You can follow us on facebook</strong><br>
		Follow us on twitter<br>
		<a href="www.twitter.com//sekucu" style="color: orange; text-decoration:underline;">FOLLOW</a>
	</p>
  </div>

  <div class="paragragh">
	<p>
		<a href="www.instagram.com//sekucu"> <img src="images/ig.jpeg" width="80" height="80"></a><br>
		<strong>You can follow us on instagram</strong><br>
		Follow us on instagram<br>
		<a href="www.instagram.com//sekucu" style="color: orange; text-decoration:underline;">FOLLOW</a>
	</p>
  </div>

  <br>
</div>
  
   <!--my line  -->
  <hr>
<br>
  <div id="wrapper">
<form action="dbh_feedback.php" method="POST">
	<h1>Feedback</h1>
	<p>
		For Any Queries: Please fill in the form below and we will try to get back to you as soon as possible.Thank you!
	</p>
	<p>NAME:</p>
	<input autocomplete="on" minlength="10" required="on" type="text" name="name" placeholder="Joe Doe"><br>
	<p>EMAIL:</p>
    <input autocomplete="on" required="on" type="text" name="email" placeholder="Joe.doe123@example.com"><br>
  <!--   SUBJECT:<br>
    <input type="text" name="subject"><br> -->
   <p> CONTENT:</p>
   <textarea autocomplete="on" required="on" rows="4" cols="50" name="content" class="feedback" placeholder="Enter your feedback here"></textarea>
<!--    <input class="bigger" type="text" name="content"><br> -->
<br>
   <button class="my-btn" name="submit" value="submit">Submit</button>
    
 </div>
</form>
</div>  <!-- end of my wrapper -->

<div  class="footer">
  <footer>
  <a href="index.php" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>
</body>
</html>