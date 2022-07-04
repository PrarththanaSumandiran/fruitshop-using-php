<?php
include "db.php";
 $id=$_POST["id"];
$name=$_POST["name"];
$weight=$_POST["weight"];
$price=$_POST["price"];
$sql="INSERT INTO `fruit`(`id`,`name`, `weight`, `price`) VALUES ('$id','$name','$weight','$price')";
$result=mysqli_query($con,$sql);
if($result){
    header("location:index.php");
}
else{
    echo "error";
}
?>







