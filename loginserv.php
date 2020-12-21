<?php
$invalid='';
if (isset($_POST['submit'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$invalid = "Incorrect";
}
else
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "accessform");
	$query = mysqli_query($conn, "Select * from form where password='$pass' and username='$user'");

	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
		header("Location: login-access.php");
	}
	else
	{
		$invalid = "Incorrect";
	}
	mysqli_close($conn);
}
}
?>