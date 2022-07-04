<?php
include ("db.php");
$sql="SELECT * FROM fruit";
$result=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="text-center mb-4">
    <h1>Register</h1>
  </div>
  <div class="container">
    <form class="form-control" action="insert2.php" method="post">
      <div class="row">
      <div class="col-3 mr-2">
        <input class="form-control" type="text" name="name" placeholder="name"  autocomplete="off">
    </div>
    <div class="col-3 mr-2">
        <input class="form-control" type="text" name="weight" placeholder="weight" autocomplete="off">
</div>
<div class="col-3 mr-2">
        <input class="form-control" type="text" name="price" placeholder="price" autocomplete="off">
</div>
      <div class="col-3 mr-2">
        <input class="btn btn-outline-primary" type="submit">
</div>
</div>
</form>
   <div class="container">
    <table class="table  table-dark table-striped">
        <tr>
       <th>id</th>
       <th>name</th>
       <th>weight</th>
       <th>price</th>
       <th></th>
       <th></th>
      </tr>
      <tbody>
        <?php 
       if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
            </tbody>
          <th><?php echo $row['id'];?></th>
           <th><?php echo $row['name']; ?>  </th>
           <th><?php echo $row['weight'];?></th>
           <th><?php echo $row['price'];?></th>
           <th><a class="btn btn-outline-primary" href="update.php?id=<?php echo $row['id'];?>">edit</a></th>
           <th><a class="btn btn-outline-danger"href="delete.php?id=<?php echo $row['id'];?>">delete</a></th>
           </tr>
         
<?php
        }
        
       }
       

        ?>
      <tr>
       </tbody>
     <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      </tr>
      </div>
      </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>