<?php
include "db.php";
$name=$_POST["name"];
$gender=$_POST["gender"];
$phonenumber=$_POST["phonenumber"];
$email=$_POST["email"];
$password=$_POST["password"];
$sql="INSERT INTO `signup`(`name`,`gender`,`phonenumber`,`email`,`password`) VALUES ('$name','$gender','$phonenumber','$email','$password')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:signin.php");    
}
else{
    echo "error";
}
?>