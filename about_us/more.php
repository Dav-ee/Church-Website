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
	    <link rel="icon" type="image/ico" href="../images/favicon.ico" />	
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More core activities</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
                <!--     <a class="navbar-brand" href="#">SEKUCU</a> -->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>
                                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Media</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../sekucu-gallery/">Gallery</a><a class="dropdown-item" role="presentation" href="#">Videos</a></div>
                            </li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="../about_us/">About US</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../events/">Events</a></li>
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="../depart.php">Departments</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="../contact_us/">Contact Us</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="../exe.php">Executive</a></li> 
                                     <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="../home.php">Portal</a></li> -->
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="http://portal.sekucu.ml/">Portal</a></li>

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

	<div class="main">
<h2><b>Other Core Activities</b></h2>
<ul>
	<li> <b>Evangelism:</b> To sensitize members into mission work in every area of life to which God calls them. This will also include individually and cooperatively proclaiming the gospel of our Lord Jesus Christ to ou fellow students and living life consistent with the gospel</li>
<br>
    	<li><b>Environmental day</b>: Cleaning of the environment is done in every semester where mebers participate .Cleaning is done within the university</li>
<br>
		<li> <b>Missioning: </b> the union do so by participate in missioning both external and internal .the external includes.Ezra conference which is hosted by the FOCUS kenya in various country (in 2019 the conference was hold) Katolini which is to be hold this semester.The internal missioning involves visiting the student in side hostels.the missioning is conducted by the union missioner.this was done early of the semester</li>
<br>

		<li> <b>Worship Night, prayer night and other groups service day:</b> the union gives different department to conduct the service.eg ushering sunday.The worshiop night are hold within the University which helps mebers to grow spiritually</li>
<br>

		<li> <b> Games:</b>  the member particpate in different games such as football,eating competitions</li>
<br>
		<li> <b>Other programmes</b> :The union offers other programmes to thr first year and fourth year in the first semester of accadamic year to the first years and second semester to the fourth years i.e fuka feat and anza feat.There is also discipleship classes for the new member who have acccepted christ</li>
</ul>

</div>
</div>
<!-- footer starts -->
<div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>

</div>
</body>
</html>