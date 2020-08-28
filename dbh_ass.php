<?php

$dbServername="sql302.epizy.com";
		$dbUsername="epiz_25239751";
		$dbPassword="moni37230559";
		$dbName="epiz_25239751_cman";

		// $dbServername="localhost";
		// $dbUsername="root";
		// $dbPassword="";
		// $dbName="cman";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


$fname=$_POST['fname'];
$sname=$_POST['sname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];


if (isset($_POST['register'])) {
$query ="select * from visitors where  mobile ='$mobile';";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if ($count>0)
	{
?>  

<script type="text/javascript">
		alert("User already Exist!!");
		window.location= "associates.php";
	</script>

	<?php
	}

	else{
 $sql= "insert into visitors(fname,sname,Gender,email,mobile) 
     values('$fname','$sname','$gender','$email','$mobile');";
		 mysqli_query($conn, $sql);

		?>

		<!-- js pop up -->
		<script type="text/javascript">
		alert("Registration Successful!!");
		window.location= "associates.php";
	</script>

	<?php
}
}