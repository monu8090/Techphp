<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <a href="Taskcrudinsert.php" class="btn btn-primary">Register Page</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $conn = mysqli_connect("localhost","root","","taskwork");
    $sql = "select*from taskcontectus";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        while($record = mysqli_fetch_assoc($result)){

      
    ?>
    <tr>
      <th scope="row"><?= $record['id']?></th>
      <td><?= $record['name']?></td>
      <td><?= $record['email']?></td>
      <td><?= $record['phone']?></td>
      <td><?= $record['message']?></td>
      <td><a href="TaskcrudDelete.php?id=<?= $record['id']?>" class="btn btn-success">Delete</a></td>
      <td><a href="Delete.php?id=<?= $record['id']?>" class="btn btn-danger">Update</a></td>
    </tr>
      <?php
      
    }
}
      ?> 
  </tbody>
</table>
</body>
</html>