<?php 

session_start();
if (isset($_SESSION['login_user']))


//alt2
// session_start();
// if (isset($_SESSION['email']))

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal</title>
	<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
        <!-- to my css -->
     <!--    <link rel="stylesheet" media="(max-width:600px)" href="responsive/afterlogin.css">
        <link rel="stylesheet" media="(min-width:601px)" href="css/afterlogin.css"> -->

  <link rel="stylesheet" type="text/css" href="css/afterlogin.css">

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
                                   <!--   <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" target="blank">SEKUCU.ORG</a></li> -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    

     <!--  <div id="header">
    <h3>Welcome to SEKU Christian Union</h3>
    </div>
     -->
<!-- box model -->
<div class="head"> 
<p class="text">Welcome!</p>
  <p class="look">This is the official SEKU CU portal.Take a look at what you can do and keep coming back
  as we will be updating it with new features</p>
</div>


<div class="container2">
<div id="small-border">
<p>What you can do</p>
</div>
<div id="border" >
<h4> <a href="ex-bbs.php"> Register for Bible Study </a>  </h4>
<p>Register for Bible Study this Semester</p>
</div>

<div id="border">
<h4> <a href="nomination.php"> Nominate </a>  </h4>
<p>Nominate CU leaders</p>
</div>

<div id="border">
<h4> <a href=""> SEKU-CU Library </a>  </h4>
<p>Coming soon</p>
</div>
</div>
</div> <!-- end of my wrapper -->
<div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>

</div>
</body>
</html>

 <?php
function pop_up()
{
echo '<script> alert(" NB:// You are in SESSION") </script>';
} 
    echo pop_up();
?> 
