<?php
session_start();
if (isset($_SESSION['reg_no'])) {
$username=$_SESSION['reg_no'];
}
else{
header('Location:login-page.php');
die();


}
		// $dbServername="localhost";
		// $dbUsername="root";
		// $dbPassword="";
		// $dbName="admin";

$dbServername='sql302.epizy.com';
$dbUsername='epiz_25239751';
$dbPassword='moni37230559';
$dbName='epiz_25239751_admin';

		
$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	$chairperson=$_POST['chairperson'];
	// $v_chairperson1=$_POST['v_chairperson1'];
	$v_chairperson1=$_POST['v_chairperson1'];
	$secretary=$_POST['secretary'];
    $v_secretary=$_POST['v_secretary'];
	$treasurer=$_POST['treasurer'];


if (!$conn) {
	die("Connection failed:" . mysqli_connect_error());
}
else{
$sql="select * from sekucu where voters_id='$username'; ";
	$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
 if ($count>0) {
 	?>
 	<script type="text/javascript">
 		function test() {
 			alert("<?php  echo "Hi"." ". $_SESSION['login_user']."!!"." "."You cannot vote TWICE.";?>" );}
 		test();//call my function
window.location= "nomination.php";
	</script>
	<?php
 } else {
 	while ($chairperson==''|| $v_chairperson1=='' || $secretary=='' || $v_secretary=='' || $treasurer=='') {
      // echo "You cannot leave $chairperson Blank";
 		?> <!-- end ofmy php -->
      <script type="text/javascript">
      function test() {
         alert("<?php  echo "Hi"." ". $_SESSION['login_user']."!!"." "."Please fill in all the Candidates";?>" );
      }
      test();//call my function
window.location= "nomination.php";
   </script>
   <?php
 	}
//insert votes into db
 	 $sql= "insert into sekucu
	(chairperson,v_chairperson1,secretary,v_secretary,treasurer,voters_id,date) 
     values('$chairperson','$v_chairperson1','$secretary','$v_secretary','$treasurer','$username','');";
     mysqli_query($conn, $sql);
     ?>
 	<script type="text/javascript">
 		function test() {
 			alert(" <?php  echo "Hi"." ". $_SESSION['login_user']."!!"." "."Thank You for Choosing your next leaders!! #VICTORS IN CHRIST"; ?>");
 		}
 		test();//call my function
window.location= "casted.php??Display results";
	</script>
	<?php
 }
}
?>