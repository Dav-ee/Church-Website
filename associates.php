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
	<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associates Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">


      <link rel="stylesheet" type="text/css" href="css/associates.css">
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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="home.php">Home</a></li>
                              <li class="nav-item" role="presentation"><a class="nav-link" href="associates.php">Associate Registration</a></li>
                               <li class="nav-item" role="presentation"><a class="nav-link" href="ex-bbs.php">Bible Study Registration</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="nomination.php">Nominations</a></li>
                                     <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" target="blank">SEKUCU.ORG</a></li> -->
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="http://sekucu.ml/" target="blank">SEKUCU.ORG</a></li>
                                       <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="signup-page.php">Registration</a>  <a class="dropdown-item" role="presentation" href="login-page.php">Login </a> </div>
                            </li>
                                     

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


<div class="text-1">
<h2> Associate Registration</h2>
<p></p>
</div>


<div id="container_demo" >
<div id="wrapper">
<div id="register">
	<!-- start of my login form -->
	      <form  action="dbh_ass.php" method="POST" autocomplete="on"> 
	      	<h5>All fields are required.</h5>
<!-- First Name -->
                                <p> 
                                 <label for="fname" > First Name:</label>
                                 <input id="fname" name="fname" required="required" type="text" placeholder="First Name"/>
                                </p>
<!-- surname -->
                               <p> 
                                 <label for="surname" > Surname: </label>
                                  <input id="Sname" name="sname" required="required" type="text" placeholder="Surname"/>
                                </p>
<!-- Gender -->
					                  <p> 
                     <label for="usernamesignup">Gender:</label>	 
				          	 <select name="gender" required="required" type="text">
					           <OPTION label="Select Gender" ></OPTION>
 					            <option value="Male">Male</option>
  				        	 <option value="Female">Female</option>
				            	</select> 
                              </p>

<!-- email -->
 							                	<p> 
                                    <label for="emailsignup" > Your email:</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="Davies.langatt@gmail.com"/> 
                                </p>
<!-- mobile number -->
 							                	 <p> 
                                    <label for="passwordsignup">Mobile number:</label>
                                    <input id="passwordsignup" name="mobile" required="required" type="text" placeholder="eg.0704988935"/>
                                  </p>
<!-- My Register button -->
                                <p class="button"> 
                                    <input type="submit" value="Register"  name="register"/>
							                 	</p>

                            </form>
                            <!-- End of my form -->
</div>
</div>
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