<?php 
session_start();
if (isset($_SESSION['login_user']))

 ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKUCU Voting System</title>

  <!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
    <link rel="stylesheet" type="text/css" href="css/nomination.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    

<form action="dbh_nomination.php" method="POST">
<div class="my-images">
  <h2>Vote in as Chairperson</h2>
 <div class="image">
  <img src="images/cont/eric.jpg" height="190" width="230" >
    <label class="radio-ctn" >
  <input type="radio" name="chairperson" value="eric" >Eric Barchokei
  <span class="checkmark"></span>
</label>
<!--   <input type="radio" name="chairperson" checked="on" value="eric"> ERIC BARCHOKEI<br> -->
</div>

<div class="image">
  <img src="images/cont/mary.jpg" height="190" width="230">
   <label class="radio-ctn" >
  <input type="radio" name="chairperson" value="mary" >Mary Nzioka
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/burundi.jpg" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="chairperson" value="burundi">Eric Burundi
  <span class="checkmark"></span>
</label>
</div>

<!-- <h2>Vote in as Vice Chairperson1</h2>

 <div class="image">
  <img src="images/cont/avatar.png" height="190" width="230" >
  <label class="radio-ctn" >
  <input type="radio"  name="v_chairperson1" value="mary">MARY NZIOKA
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/avatar.png" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio"  name="v_chairperson1" value="mary" >MARY NZIOKA
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/avatar.png" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="v_chairperson1" value="mary" >MARY NZIOKA
  <span class="checkmark"></span>
</label>
</div> -->

 <h2>Vote in as Vice Chairperson</h2>
 <div class="image">
  <img src="images/cont/fred.jpg" height="190" width="230" >
  <label class="radio-ctn" >
  <input type="radio" name="v_chairperson1" value="fred" >Fred Murwiri
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/victor-moses.jpg" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio"  name="v_chairperson1" value="victor" >Victor Moses
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/avatar.png" height="190" width="230">
    <label class="radio-ctn" >
  <input type="radio"  name="v_chairperson1" value="avatar">Avatar #2
  <span class="checkmark"></span>
</label>
</div> 
<h2>Vote in as Secretary</h2>
 <div class="image">
  <img src="images/cont/samuel.jpg" height="200" width="230" >
  <label class="radio-ctn" >
  <input type="radio" name="secretary" value="samuel">Samuel Kirori
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/winny.jpg" height="200" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="secretary" value="winfred">Winfred Masili
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/harison.jpg" height="200" width="230">
    <label class="radio-ctn" >
  <input type="radio" name="secretary" value="harrison">Harrison Tinega
  <span class="checkmark"></span>
</label>
</div>
<h2>Vote in as Vice Secretary</h2>
 <div class="image">
  <img src="images/cont/lawrence.jpg" height="190" width="230" >
  <label class="radio-ctn" >
  <input type="radio"  name="v_secretary" value="lawrence" >Lawrence Gakuya
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/dorcas.jpg" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="v_secretary" value="dorcas" >Dorcas Mwende
  <span class="checkmark"></span>
</label>
</div>
<div class="image">
  <img src="images/cont/joy.jpg" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="v_secretary" value="joy" >Joy Robert
  <span class="checkmark"></span>
</label>
</div>


<h2>Vote in as Treasurer</h2>
 <div class="image">
  <img src="images/cont/vincent.jpg" height="190" width="230" >
  <label class="radio-ctn" >
  <input type="radio" name="treasurer" value="vincent" >Vincent Kibwange
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/noel.jpg" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="treasurer" value="noel" >Noel Kiplangat
  <span class="checkmark"></span>
</label>
</div>

<div class="image">
  <img src="images/cont/mary.jpg" height="190" width="230">
  <label class="radio-ctn" >
  <input type="radio" name="treasurer" value="mary" >Mary Nzioka
  <span class="checkmark"></span>
</label>
</div>


<div class="vote1">NB//  You only vote once😍</div>
<div class="submit-btn">
<input type="submit" name="submit" value="✨VOTE✨">
</div>
</div>
</form>


<!-- content ends here -->
</div>
<!-- start of footer -->
<div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>

</div>