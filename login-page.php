<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login to your Account!!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="SEKU CU" />
        <meta name="keywords" content="Church, SEKUCU, Member registration" />

         <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
       <!--   <link rel="stylesheet" media="(max-width:600px)" href="responsive/login.css">
         <link rel="stylesheet" media="(min-width:601px)" href="css/login.css">

 -->

 <link rel="stylesheet" type="text/css" href="css/login.css">
 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">

    </head>
    <body>


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

                                   <!--   <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" target="blank">SEKUCU.ORG</a></li> -->
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="http://sekucu.ml/" target="blank">SEKUCU.ORG</a></li>

                                  <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">More </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="signup-page.php">Registration</a>  <a class="dropdown-item" role="presentation" href="login-page.php">Login </a> </div>
                            </li>
                    

                        </ul>
                </div>
            </nav>
        </div>
    </div>
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->

<div class="container">
  <div class="alert alert-primary alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
 Kindly Enter Your <strong> USERNAME & PASSWORD </strong> To Proceed!!
  </div>
</div>

    	 <div class="container">     
            <section>			
                <div id="container_demo" >
                    <div id="wrapper">
                         <div id="login">
<!-- START OF MY LOGIN FORM -->
                                    <!-- POST Method (DETAILS TO MY DB first) -->
                            <form  action="dbh_login.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                 <label for="username" class="uname" data-icon="u" > Username: </label>
                                    <input autofocus="on" id="username" name="username" required="required" type="text" placeholder="Mobile Number" />
                                </p>
                                <p> 
                                    <label for="password" class="uname" data-icon="p"> Your password: </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login"  name="login"/>
								</p>
                                
                                <p>
									Don't have an account yet?
                                    <!-- link redirecting to my SIGN-UP page -->
                        
									<a href="signup-page.php" class="to_register"> <br> Register now</a>
                        
                                    <br>
                                    <a href="resetpwd.php" class="to_register">Reset your password?</a>
								</p>
                            </form>
                        </div>
<!-- END OF LOGIN FORM -->

             </div>
        </div>
</section>
                </div>
</body>
</html>