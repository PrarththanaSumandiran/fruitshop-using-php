<?php
include "db.php";
if(isset($_POST['update'])){
    // $name=$_POST['name'];
    $id=$_POST['id'];
    // $weight=$_POST['weight'];
    // $price=$_POST['price'];
    
    $sql = "UPDATE `fruit` SET `name`= '".$_POST['name']."',`weight`= '".$_POST['weight']."',`price`= '".$_POST['price']."' WHERE `id`= $id";
    
    $result=$con->query($sql);

    if($result === True){
        echo ", Record updated successfully";
    }else
    {
        echo "Error:".$sql."<br>".$con->error;
    }
}

if (isset($_GET['id'])){
$id=$_GET['id'];

$sql="SELECT * FROM fruit WHERE id=$id";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
   $name=$row['name'];
   $weight=$row['weight'];
   $price=$row['price'];
   $id=$row['id'];
?>
  <div class="text-center mb-4">
    <h1 class="text-align-center">Register</h1>
  </div>

  <div class="container">
    <form class="form-control" action="update.php" method="post">
      <div class="row">
      <div class="col-3 mr-2">
        <input class="form-control" type="text" name="name" value="<?php echo $name;?>">
    </div>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <div class="col-3 mr-2">
        <input class="form-control" type="text" name="weight" value="<?php echo $weight;?>">
</div>
<div class="col-3 mr-2">
        <input class="form-control" type="text" name="price" value="<?php echo $price;?>">
</div>
      <div class="col-3 mr-2">
        <input class="btn btn-outline-primary" type="submit" name="update" value="update">
</div>
</div>
<a href="index.php">home</a>
</form>
<?php
    }
}

}else{
    header("location:index.php");

}

?>