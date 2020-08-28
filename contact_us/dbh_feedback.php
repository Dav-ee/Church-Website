<?php

$dbservername="sql302.epizy.com"; 
$dbusername="epiz_25239751";
$dbpassword="moni37230559";
$dbname="epiz_25239751_cman";
    
// $dbservername="localhost";
// $dbusername="root";
// $dbpassword="";
// $dbname="cman";

$conn= mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

$name=$_POST['name'];
$email=$_POST['email'];
$content=$_POST['content'];

$sql="insert into feedback(name, email,content) values('$name', '$email','$content');";
$result=mysqli_query($conn,$sql);

if ($result==true) {
?>
<script type="text/javascript">
		alert("Feedback submitted!!");
		window.location= "index.php";
	</script>
<?php

}

else{
	echo "Error in Feedback Submition";
}
