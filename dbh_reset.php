<?php
// $Servername="localhost";
// $Username="root";
// $Password="";
// $dbName="cman";

$dbServername="sql302.epizy.com";
		$dbUsername="epiz_25239751";
		$dbPassword="moni37230559";
		$dbName="epiz_25239751_cman";

$conn=mysqli_connect($Servername,$Username,$Password,$dbName);
if (isset($_POST['reset'])) {
	$mobile_no=$_POST['mobile_no'];
	$password=$_POST['password'];
	$rpt_password=$_POST['rpt-password'];
	//comparing pwds
	if($password!=$rpt_password)
	{
?>
		<script type="text/javascript">
		alert("Error.Your passwords do not match!!");
		window.location= "resetpwd.php";
		</script>

<?php	
		}

	else
	{

$sql_query="select * from members where id='$mobile_no' ; ";
$check_mobile=mysqli_query($conn,$sql_query);
$count=mysqli_num_rows($check_mobile);
if ($count<=0) {
	?>  
	<script type="text/javascript">
		alert("	Error:User does not exist!!");
		window.location= "login-page.php??Error";
		</script>

		<?php
} else {
$sql="update members set password='$password' where mobile='$mobile_no'; ";
	$result=mysqli_query($conn,$sql);
}
?>
	<script type="text/javascript">
		alert("Success:Your password successfully changed!!");
		window.location= "login-page.php??Password-Successfully changed";
	</script>
	<?php

	}
}