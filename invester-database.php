<?php

include('assets/includes/connection.php');
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$city=$_POST['city'];

    $query="insert into investorinfo (`Name`,`Address`,`Email`,`Password`,`Phone`,`State`,`City`,`Zip`) values ('$name','$address','$email','$password',
    '$phone','$city')";

    $result=mysqli_query($con,$query) ;
    echo"success";

	


?>
