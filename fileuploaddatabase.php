<?php

include('assets/includes/connection.php');
    $plan=$_POST['plan'];
    $detail=$_POST['detail'];
    $upload=$_POST['upload'];

        $query="insert into fileupload(`Plan`,`Plandetail`,`Imgfile`) values ('$plan','$detail','$upload')";

        $result=mysqli_query($con,$query) ;
        echo"success";
?>
