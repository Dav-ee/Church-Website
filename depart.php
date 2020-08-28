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
   
    <link rel="icon" type="image/ico" href="images/favicon.ico" />	
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Departments @SEKUCU</title>
    <link rel="stylesheet" type="text/css" href="css/depart.css">
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
                <!--     <a class="navbar-brand" href="#">SEKUCU</a> -->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                              <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="gallery/index.php">Media</a></li> -->
                                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Media</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>
                            </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="about_us/">About US</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="events/">Events</a></li>
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="contact_us/">Contact US</a></li>
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="depart.php">Departments</a></li>
                                   
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="exe.php">Executive</a></li> 
                                    <!--   <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Portal</a></li> -->
                                        <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li>


                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    
<div class="main">
	<p> <span class="join-any-dept">Feel free to join one or two departments here: </span> </p>
<div class="left">
	<ul>
     <li> Secretariate and Editorial</li>
 <li>Mission and Evangelism</li> 
 <li>Intercessory </li>
   <li> Instrumentalist</li>
      <li> Creative Ministry</li>
 <li> Choir</li>
	</ul>
</div>
<div class="right">
<ul>
 <li>Praise and Worship </li> 
 <li>Ushers,Catering and Hospitality </li> 
 <li>Men of Courage(M.O.C) </li>
  <li>Daughter of zion(D.O.Z)</li>
 <li>Bible study and Discipleship </li> 
   
 <a href="signup-page.php"> Join Us Now </a>
	</ul>
	</div>
</div> 


<!-- mission vision -->

<div class="table">
  <div class="table-cell-1">
    <h4 class="ttl">Mission</h4>
<p><li>To proclaim the gospel in seku, the immediate region,around Kenya and entire world and to nature people to grow spiritually,socially also morally, academically, proffesionally and leadership-wise.</li> </p>
  </div>
<div class="table-cell-2">
    <h4 class="ttl">Vision</h4>
<p>
<li>To be a family of well nurtured responsible Christians having Godly impact in the campus and the society</li>
</p>
</div>
<div class="table-cell-3"><ul>
  <h4 id="ttl" class="ttl">Core Values</h4>
 <li>Holiness</li> 
 <li>Faithfulness to the Holy Scripture </li> 
 <li> Unity</li>
  <li>Integrity </li>   <li> Excellence</li>
  </div>

</div>

</div> <!-- end of wrapper -->

<div  class="footer">
  <footer>
  <a href="index.php" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>
</div>
</body>
</html>