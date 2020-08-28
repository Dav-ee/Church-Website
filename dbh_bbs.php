<?php

		// $dbServername="localhost";
		// $dbUsername="root";
		// $dbPassword="";
		// $dbName="admin";

$dbServername=" sql302.epizy.com";
    $dbUsername="epiz_25239751";
    $dbPassword="moni37230559";
    $dbName="epiz_25239751_admin";

    
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


$fname=$_POST['fname'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$user_consent=$_POST['user_consent'];

if (isset($_POST['submit'])) {
$query ="select * from bbs where  mobile ='$mobile';";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if ($count>0)
	{
?>  

<script type="text/javascript">
		alert("You Have Already Registered !!");
		window.location= "ex-bbs.php";
	</script>

	<?php
	}

	else{
 $sql= "insert into bbs(fname,gender,mobile,user_consent) 
     values('$fname','$gender','$mobile','$user_consent');";
		 mysqli_query($conn, $sql);

		?>

		<!-- js pop up -->
		<script type="text/javascript">
		alert("You Have Successfully Registered for This Semester Bible Study!!");
		window.location= "ex-bbs.php";
	</script>

	<?php
}
}