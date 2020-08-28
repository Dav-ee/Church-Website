<?php 
session_start();
if (isset($_SESSION['login_user']))

 ?>


<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Bible Study</title>
        <!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
         <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/ex-bbs.css">
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

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="afterlogin.php">Home</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="ex-bbs.php">Bible Study Registration</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="nomination.php">Nominations</a></li>
                             <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="finance.php">Finance</a></li>
                              <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">SEKUCU.ORG</a></li> -->
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






    	 <div class="container">     
            <section>			
                <div id="container_demo" >
                    <div id="wrapper">
                         <div id="login">
                                    <!-- POST Method (DETAILS TO MY DB first) -->
                            <form action="dbh_bbs.php" method="POST"> 
                                <h1>Register For BBS</h1> 

                                <p> 
                                 <label for="name" class="uname" > Enter Your Full Name: </label>
                                    <input id="name" name="fname" required="required" type="text" minlength="6"  maxlength="50" placeholder="Joe Doe" />
                                </p>
                     	
                  				       <p> 
                                    <label for="mobile" class="uname" >Enter Your Mobile Number: </label>
                                    <input id="mobile" name="mobile" required="required" type="text" maxlength="10" minlength="10" placeholder="i.e 0712345678"/> 
                                </p>		

                                	<p> 
                                <label for="usernamesignup"  class="uname">Gender</label>
                                <select name="gender" id="usernamesignup" required="required" type="text">
                                 <OPTION label="--Select Gender--" ></OPTION>
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                                    </select> 
                                </p>

                          <p class="keeplogin"> 
									             <input type="checkbox"  required="required" name="user_consent" id="loginkeeping" value="1" /> 
								               <label for="loginkeeping">I <strong> <?php echo $_SESSION['login_user'] .","; ?> </strong> Strongly  Agree to </label>
							              	<label>adhere and uphold all rules and regulations governing SEKU CU Bible Study</label>
                             </p>

                                <p class="login button"> 
                                    <input type="submit" value="Submit"  name="submit"/>
							                 	</p>

                            </form>
                        </div>
<!-- END OF LOGIN FORM -->

             </div>
        </div>
</section>
                </div>



<!-- <div class="alert">
	<p>Sorry. Bible Study Registration has closed. <br>For more information contact Bible Study Secretary.</p>
</div>
</div> -->

<!-- footer -->

<div  class="footer">
  <footer>
  <a href="" target="blank">SEKU CU</a> <br>
    <span class="footer-text">&copy;2020: All Rights reserved. </span>
</footer>
</div>

</div>
</body>
</html>