<?php

$dbServername="sql302.epizy.com";
    $dbUsername="epiz_25239751";
    $dbPassword="moni37230559";
    $dbName="epiz_25239751_cman";
    
		// $dbServername="localhost";
		// $dbUsername="root";
		// $dbPassword="";
		// $dbName="cman";

if (isset($_POST['login'])) {

$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

session_start();


$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['reg_no']=$username;

$sql="select * from members where mobile='$username' and password='$password'; ";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if ($row>1) { 
   $_SESSION['login_user']=$row['fname'];
     $_SESSION['sname']=$row['sname'];
       $_SESSION['lname']=$row['lname'];
         $_SESSION['Gender']=$row['Gender'];
           $_SESSION['Birthday']=$row['Birthday'];
             $_SESSION['Residence']=$row['Residence'];
               $_SESSION['pob']=$row['pob'];
                 $_SESSION['ministry']=$row['ministry'];
                   $_SESSION['mobile']=$row['mobile'];
                     $_SESSION['email']=$row['email'];
                         $_SESSION['date']=$row['date'];
                         
	header("location:afterlogin.php");
}
 else {
	?><script type="text/javascript">
		alert("Wrong details!!");
		window.location= "login-page.php";
	</script>

	<?php


}
}
?>