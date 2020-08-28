<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register as one of US..</title>
        <!-- setting my viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="SEKU CU" />
        <meta name="keywords" content="Church, SEKUCU, Member registration" />
<!-- <link rel="stylesheet" media="(max-width:600px)" href="responsive/signUp.css">
<link rel="stylesheet" media="(min-width:601px)" href="css/signUp.css"> -->

    <link rel="stylesheet" type="text/css" href="css/signUp.css">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
<!-- my favicon -->
        <link rel="icon" type="image/ico" href="images/favicon.ico" /> 

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
                                    <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" target="blank">SEKUCU.ORG</a></li> -->
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
    

    


        <div class="container">
            <section>				
                <div id="container_demo" >

                    <div id="wrapper">

                        <div id="register">
<!-- START OF MY SIGN UP FORM -->
                            <!-- POST Method (DETAILS TO MY DB) -->
                            <form  action="dbh_reg.php" method="POST" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">First Name</label>

                                    <input autocomplete="on" id="usernamesignup" name="fname" required="required" type="text" placeholder="Joe" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" > Middle Name</label>

                                    <input id="usernamesignup" autocomplete="on" name="sname" type="text" placeholder="--"/> 
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Last Name</label>
                                    
                                    <input id="usernamesignup" autocomplete="on" name="lname" required="required" type="text" placeholder="Doe" />
                                </p>

								<p> 
                                <label for="usernamesignup" class="uname">Gender</label>
<select name="gender" id="usernamesignup" required="required" type="text">
    <OPTION label="Select Gender" ></OPTION>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select> 
                                </p>
                                
								<p>

                                    <label for="usernamesignup" class="uname" data-icon="u">Date Of Birth</label>
                                    <input id="usernamesignup" autocomplete="on" type="date" name="birthday" min="1980-01-01" max="2020-01-01" />
                                </p>
								<p>

                                    <label for="usernamesignup" class="uname" data-icon="u">Current Residence</label>
                                    <input id="usernamesignup" autocomplete="on" name="residence" required="required" type="text" placeholder="Kwa-Vonza" />
                                </p>
<p>

 <label for="usernamesignup" class="uname">County Of Birth</label>
<select name="pob" id="usernamesignup" required="required" type="text">
  <option value="None">-Select-</option>
 <option value="Mombasa">Mombasa</option>
 <option value="Kwale">Kwale</option><option value="Kilifi">Kilifi</option><option value="Tana River">Tana River</option><option value="Lamu">Lamu</option><option value="Taita-Taveta">Taita-Taveta</option><option value="Garissa">Garissa</option><option value="Wajir">Wajir</option><option value="Mandera">Mandera</option><option value="Marsabit">Marsabit</option><option value="Isiolo">Isiolo</option><option value="Meru">Meru</option><option value="Tharaka-Nithi">Tharaka-Nithi</option><option value="Embu">Embu</option><option value="Kitui">Kitui</option><option value="Machakos">Machakos</option><option value="Makueni">Makueni</option><option value="18">Nyandarua</option><option value="19">Nyeri</option><option value="Kirinyaga">Kirinyaga</option><option value="Murang'a">Murang'a</option><option value="Kiambu">Kiambu</option><option value="Turkana">Turkana</option><option value="West Pokot">West Pokot</option><option value="Samburu">Samburu</option><option value="Trans Nzoia">Trans Nzoia</option><option value="Uasin Gishu">Uasin Gishu</option><option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option><option value="Nandi">Nandi</option><option value="Baringo">Baringo</option><option value="Laikipia">Laikipia</option><option value="Nakuru">Nakuru</option><option value="Narok">Narok</option><option value="Kajiado">Kajiado</option><option value="Kericho">Kericho</option><option value="Bomet">Bomet</option><option value="Kakamega">Kakamega</option><option value="Vihiga">Vihiga</option><option value="Bungoma">Bungoma</option><option value="Busia">Busia</option><option value="Siaya">Siaya</option><option value="Kisumu">Kisumu</option><option value="Homa Bay">Homa Bay</option><option value="Migori">Migori</option><option value="Kisii">Kisii</option><option value="Nyamira">Nyamira</option><option value="Nairobi">Nairobi</option>
</select> 
</p>

								<p> 
                                    <label for="usernamesignup" class="uname">Ministry</label>
                                    <select name="ministry" id="usernamesignup" required="required" type="text">
  <option value="None">-Select-</option>
  <option value="Praise and Worship">Praise and Worship</option>
  <option value="Ushers,Catering & Hospitality">Ushers,Catering & Hospitality</option>
  <option value="Choir">Choir</option>
  <option value="Media and Instruments">Media and IT</option>
  <option value="Intercesory">Intercesory</option>
  <option value="Secretariate & Editorial">Secretariate & Editorial</option>
      <option value="Creative Ministry">Creative Ministry</option>
        <option value="Men Of Courage(M.O.C)">Men Of Courage(M.O.C)</option>
        <option value="Daughter Of Zion(D.O.Z)">Daughter Of Zion(D.O.Z)</option>
        <option value="Mission & Evangelism">Mission & Evangelism</option>
 <option value="Bible Study and Discipleship">Bible Study and Discipleship</option>
</select> 
                                </p>
								 <p> <i class="fa fa-envelope"></i>

                                    <label for="emailsignup" class="youmail" data-icon="e" >Email Address (Password will be sent to this)</label>
                                    <input id="emailsignup" autocomplete="on" name="email" required="required" type="email" placeholder="Joe.doe123@example.com"/> 
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">REG.Number/Mobile number </label>
                                    <input id="passwordsignup" autocomplete="on" name="mobile" required="required" type="text" placeholder="eg.0712345678"/>
                                </p>
                                <p>    <i class="fa fa-key"></i>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />


                                </p>
                                <p class="button"> 
									<input type="submit" value="Sign up" name="submit"/> 
								</p>

                                <p>  
									Already a member ?
                                      <!-- link redirecting to my LOGIN PAGE -->
									<a href="login-page.php" class="to_register"> Go and log in </a>
								</p>
<!-- END OF MY SIGN UP FORM -->
                            </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>