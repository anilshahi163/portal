<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];

$con=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($con,"bizbase");

	$query="select * from userinfo where username='$user' and password='$pass'";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));

	$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(isset($arr)){
		$_SESSION['user']=$user;
		header('location:register.php');
			}
	else{
		echo 'your are not authorized user';
	}


?>
a