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
    <title>Gallery-Reminder of our past</title>
        <!-- my favicon -->
        <link rel="icon" type="image/ico" href="../images/favicon.ico" /> 
 
     <link rel="stylesheet" type="text/css" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="../assets/css/Header-Dark.css">

</head>
<body>
  <div id="page-container">
    <div id="content-wrap">

  <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container">
                    
                    <img class="logo" src="../images/logo.png">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>

                              <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Media</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="index.php">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>
                            </li>

                                  <li class="nav-item" role="presentation"><a class="nav-link" href="../about_us/">About Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../events/">Events</a></li>
 <li class="nav-item" role="presentation"><a class="nav-link"  href="../depart.php">Departments</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="../exe.php">Executive</a></li> 

                                   <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Contact Us</a> <a class="dropdown-item" role="presentation" href="http://portal.sekucu.ml/">Portal</a>
                                </div>
                            </li>
                    

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


    <div id="head">
        <p>OUR GALLERY</p>
    </div>

<p class="phot">Photos</p>

 <div class="line1" >
        <p> </p>
    </div>

<div class="my-links">
    <ol>
        <li><a href="choir.php">Choir Gallery 2019_2020</a></li>
        <li><a href="praise.php"> Praise and Worship Gallery 2019</a></li>
          <li><a href="#">Mission 2019</a></li>
          <li><a href="#"> Chastity Campaign 2019</a></li>
         <li><a href="#">Environmental Day 2019_2020</a></li>
    </ol>
</div>


<!-- <div class="my-links">
    <ol>
        <li><a href="choir.html">Choir Gallery 2019_2020</a></li>
        <li><a href="praise_worship.html"> Praise and Worship Gallery 2019</a></li>
          <li><a href="mission.html">Mission 2019</a></li>
          <li><a href="chastity_campaign.html"> Chastity Campaign 2019</a></li>
         <li><a href="environmental_day.html">Environmental Day 2019_2020</a></li>
    </ol>
</div> -->
    <div class="line" >
        <p> </p>
    </div>
</div>
    <div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>

</div>
</body>
</html>