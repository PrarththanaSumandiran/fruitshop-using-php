<?php
session_start();
include "db.php";
$email=$_POST['email'];
$Password=$_POST['password'];
$sql="select * from `signup` where email='$email',password='$Password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0){
    header("location:home.php");
    $_SESSION["email"]=$email;
}
else{
header("location:signin.php");
echo "login error";
}
?>