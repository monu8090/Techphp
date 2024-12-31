<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<td><a href="insert_data.php" class="btn btn-success">Register Page</a></td> 
<table class="table table-dark table-striped">
 
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">username</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Country</th>
      <th scope="col">Subject</th>
      <th scope="col">Desciption</th>
      <th scope="col">Time Creation</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $conn = mysqli_connect("localhost","root","","techphp25");
    $sql = "select*from all_field";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($record = mysqli_fetch_assoc($result)){

    //     }
    // }
    
    ?>
    <tr>
      <th scope="row"><?= $record['id']?></th>
      <td><?= $record['username']?></td>
      <td><?= $record['dob']?></td>
      <td><?= $record['gender']?></td>
      <td><?= $record['country']?></td>
      <td><?= $record['subject']?></td>
      <td><?= $record['descri']?></td>
      <td><?= $record['TimeCreate']?></td>
      <td><a href="delete.php?id=<?= $record['id']?>" class="btn btn-danger">Delete</a></td>
      <td><a href="Update.php?id=<?= $record['id']?>" class="btn btn-success">Update</a></td>    




    </tr>
  <?php
  }
}
  
  ?>
  </tbody>
</table>
</body>
</html>