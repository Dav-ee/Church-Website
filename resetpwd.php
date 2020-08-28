<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>
    <!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 
    <link rel="stylesheet" type="text/css" href="css/reset_pwd.css">
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
                            <li class="nav-item" role="presentation"><a class="nav-link" href="afterlogin.php">Home</a></li>
                               <li class="nav-item" role="presentation"><a class="nav-link" href="ex-bbs.php">Bible Study Registration</a></li>
                                  <li class="nav-item" role="presentation"><a class="nav-link" href="nomination.php">Nominations</a></li>
                                     <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php">Profile</a></li>
                                  <!--    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" target="blank">SEKUCU.ORG</a></li> -->
                                       <li class="nav-item" role="presentation"><a class="nav-link" href="http://sekucu.ml/" target="blank">SEKUCU.ORG</a></li>
                                      <li class="nav-item" role="presentation"><a class="nav-link" href="Logout.php">Logout</a></li>

                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    



	 <div id="wrapper">
		 <div id="box">
		 	<!-- POST Method (DETAILS TO MY DB) -->
		<form  action="dbh_reset.php" method="POST" autocomplete="on"> 

					<h1>RECOVER YOUR PASSWORD</h1>			
 			<p>  Enter the Username/Mobile number you of your Account
	  		and we will help you create a new password.
			</p>
		<p> 
                <label for="username" class="uname">Username/Mobile number </label>

                <input id="username" name="mobile_no" required="required" type="text" placeholder="eg.0704988935"/>
    	</p>

		<p> 
                 <label for="password" class="youpasswd">Enter New Password </label>
                 <input id="password" name="password" required="required" type="password" maxlength="8"  placeholder="Please enter your new password" /> 
		</p>

		<p> 
                 <label for="password" class="youpasswd">Confirm Password </label>
                 <input id="password" name="rpt-password" required="required" type="password" maxlength="8" placeholder="Confirm your new password" /> 
		</p>
		
		
		
		<p class="login button"> 
                 <input type="submit" value="RESET"  name="reset"/>
		</p>
</form>
</div>
</div>
</body>
</html>