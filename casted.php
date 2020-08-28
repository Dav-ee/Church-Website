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
    <link rel="stylesheet" type="text/css" href="css/casted.css">
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
                                         <li class="nav-item" role="presentation"><a class="nav-link" href="#">Finance</a></li>
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
    
<table id="katikati">
<?php
$dbServername='localhost';
$db_username='root';
$db_password='';
$db_name='admin';

// $dbServername='sql302.epizy.com';
// $db_username='epiz_25239751';
// $db_password='moni37230559';
// $db_name='epiz_25239751_admin';

$conn=mysqli_connect($dbServername,$db_username,$db_password,$db_name);

$sql="SELECT chairperson from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
  //constants
$screen="<script> document.write(screen.width);</script> ";
echo "newt_get_screen_size: ".$screen;

$max_width=530;
//CHAIR PERSON
$sql="SELECT * from sekucu where chairperson='eric';";
$result=mysqli_query($conn,$sql);
$eric=mysqli_num_rows($result);
$eric_width=round((int)$eric/(int)$total_votes *(int)$max_width);
//mary
$sql="SELECT * from sekucu where chairperson='mary';";
$result=mysqli_query($conn,$sql);
$mary=mysqli_num_rows($result);
$mary_width=round((int)$mary/(int)$total_votes * (int)$max_width);
//burundi
$sql="SELECT * from sekucu where chairperson='burundi';";
$result=mysqli_query($conn,$sql);
$burundi=mysqli_num_rows($result);
$burundi_width=round((int)$burundi/(int)$total_votes *(int)$max_width);
//Vice Chairperson1
$sql="SELECT v_chairperson1 from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
//fred
$sql="SELECT * from sekucu where v_chairperson1='fred';";
$result=mysqli_query($conn,$sql);
$fred=mysqli_num_rows($result);
$fred_width=round((int)$fred/(int)$total_votes * (int)$max_width);
//victor
$sql="SELECT * from sekucu where v_chairperson1='victor';";
$result=mysqli_query($conn,$sql);
$victor=mysqli_num_rows($result);
$victor_width=round((int)$victor/(int)$total_votes *(int) $max_width);
//mary
$sql="SELECT * from sekucu where v_chairperson1='avatar';";
$result=mysqli_query($conn,$sql);
$avatar=mysqli_num_rows($result);
$avatar_width=round((int)$avatar/(int)$total_votes * (int)$max_width);


//Treasurer
$sql="SELECT treasurer from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
//vincent
$sql="SELECT * from sekucu where treasurer='vincent';";
$result=mysqli_query($conn,$sql);
$vincent=mysqli_num_rows($result);
$vincent_width=round((int)$vincent/(int)$total_votes * (int)$max_width);
//noel
$sql="SELECT * from sekucu where treasurer='noel';";
$result=mysqli_query($conn,$sql);
$noel=mysqli_num_rows($result);
$noel_width=round((int)$noel/(int)$total_votes * (int)$max_width);
//mary
$sql="SELECT * from sekucu where treasurer='mary';";
$result=mysqli_query($conn,$sql);
$mary=mysqli_num_rows($result);
$mary_width=round((int)$mary/(int)$total_votes * (int)$max_width);


//SECRETARY
$sql="SELECT secretary from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
//samuel
$sql="SELECT * from sekucu where secretary='samuel';";
$result=mysqli_query($conn,$sql);
$samuel=mysqli_num_rows($result);
$samuel_width=round((int)$samuel/(int)$total_votes * (int)$max_width);
//winfred
$sql="SELECT * from sekucu where secretary='winfred';";
$result=mysqli_query($conn,$sql);
$winfred=mysqli_num_rows($result);
$winfred_width=round((int)$winfred/(int)$total_votes *(int) $max_width);
//harrison
$sql="SELECT * from sekucu where secretary='harrison';";
$result=mysqli_query($conn,$sql);
$harrison=mysqli_num_rows($result);
$harrison_width=round((int)$harrison/(int)$total_votes * (int)$max_width);

//vice secretary
$sql="SELECT treasurer from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
//lawrence
$sql="SELECT * from sekucu where v_secretary='lawrence';";
$result=mysqli_query($conn,$sql);
$lawrence=mysqli_num_rows($result);
$lawrence_width=round((int)$lawrence/(int)$total_votes * (int)$max_width);
//noel
$sql="SELECT * from sekucu where v_secretary='dorcas';";
$result=mysqli_query($conn,$sql);
$dorcas=mysqli_num_rows($result);
$dorcas_width=round((int)$dorcas/(int)$total_votes * (int)$max_width);
//mary
$sql="SELECT * from sekucu where v_secretary='joy';";
$result=mysqli_query($conn,$sql);
$joy=mysqli_num_rows($result);
$joy_width=round((int)$joy/(int)$total_votes * (int)$max_width);

//Treasurer
$sql="SELECT treasurer from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
//vincent
$sql="SELECT * from sekucu where treasurer='vincent';";
$result=mysqli_query($conn,$sql);
$vincent=mysqli_num_rows($result);
$vincent_width=round((int)$vincent/(int)$total_votes * (int)$max_width);
//noel
$sql="SELECT * from sekucu where treasurer='noel';";
$result=mysqli_query($conn,$sql);
$noel=mysqli_num_rows($result);
$noel_width=round((int)$noel/(int)$total_votes * (int)$max_width);
//mary
$sql="SELECT * from sekucu where treasurer='mary';";
$result=mysqli_query($conn,$sql);
$mary=mysqli_num_rows($result);
$mary_width=round((int)$mary/(int)$total_votes * (int)$max_width);
?> 

<!-- chairperson -->
    <tr>
      <td>
    <div> <h3 class="cheo"> Chairperson</h3></div>
<!-- eric -->
  <?php echo  '<div class="bars"; style="background:lightgreen;width:'
  .$eric_width."px;".'
  "><p>Eric</p></div>';
  ?>
<!-- mary -->
  <?php echo  '<div class="bars"; style="background:yellow;width:'
  .$mary_width."px;".'
  "><p>Mary</p></div>';
  ?>
  <!-- burundi -->
   <?php echo  '<div class="bars"; style="background:aquamarine;width:'
  .$burundi_width."px;".'
  "><p>Burundi</p></div>';
  //total votes
$sql="SELECT chairperson from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
  echo  "<p>Total Votes Casted:".$total_votes."</p>";

  echo  '<p class="line"></p>';
?>
  <!-- vice chairperson-->
    <tr>
       <td>
    <div> <h3 class="cheo"> V.Chairperson1</h3></div>
  <?php echo  '<div class="bars"; style="background:lightgreen;width:'
  .$fred_width."px;".'
  "><p>Fred</p></div>';
  ?>
  <?php echo  '<div class="bars"; style="background:yellow;width:'
  .$victor_width."px;".'
  "><p>Victor</p></div>';
  ?>
   <?php echo  '<div class="bars"; style="background:aquamarine;width:'
  .$avatar_width."px;".'
  "><p>Avatar</p></div>';
  //total votes
$sql="SELECT v_chairperson1 from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
  echo  "<p>Total Votes Casted:".$total_votes."</p>";
    echo  '<p class="line"></p>';
  ?>

<!-- Secretary -->
    <tr>
    <td>
      <div> <h3 class="cheo"> Secretary</h3></div>
  <?php echo  '<div class="bars"; style="background:lightgreen;width:'
  .$samuel_width."px;".'
  "><p>Samuel</p></div>';
  ?>
  <?php echo  '<div class="bars"; style="background:yellow;width:'
  .$winfred_width."px;".'
  "><p>Winfred</p></div>';
  ?> 
   <?php echo  '<div class="bars"; style="background:aquamarine;width:'
  .$harrison_width."px;".'
  "><p>Harrison</p></div>';
  //total votes
$sql="SELECT secretary from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
  echo  "<p>Total Votes Casted:".$total_votes."</p>";

    echo  '<p class="line"></p>';
?>
  <!-- vice secretary-->
    <tr>
    <td><div> <h3 class="cheo"> V.Secretary</h3></div>
  <?php echo  '<div class="bars"; style="background:lightgreen;width:'
  .$lawrence_width."px;".'
  "><p>Lawrence</p></div>';
  ?>
  <?php echo  '<div class="bars"; style="background:yellow;width:'
  .$dorcas_width."px;".'
  "><p>Dorcas</p></div>';
  ?>
   <?php echo  '<div class="bars"; style="background:aquamarine;width:'
  .$joy_width."px;".'
  "><p>Joy</p></div>';
  //total votes
$sql="SELECT v_secretary from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
  echo  "<p>Total Votes Casted:".$total_votes."</p>";

    echo  '<p class="line"></p>';
  ?> 
  <!-- Treasurer -->
    <tr>
    <td><div> <h3 class="cheo"> Treasurer</h3></div>
  <?php echo  '<div class="bars"; style="background:lightgreen;width:'
  .$vincent_width."px;".'
  "><p>Vincent</p></div>';
  ?>
  <?php echo  '<div class="bars"; style="background:yellow;width:'
  .$noel_width."px;".'
  "><p>Noel</p></div>';
  ?>
   <?php echo  '<div class="bars"; style="background:aquamarine;width:'
  .$mary_width."px;".'
  "><p>Mary</p></div>';
  //total votes
$sql="SELECT treasurer from sekucu;";
$query=mysqli_query($conn,$sql);
$total_votes=mysqli_num_rows($query);
  echo  "<p>Total Votes Casted:".$total_votes."</p>";

    echo  '<p class="line"></p>';
  ?>    
  </tr>
</table>
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