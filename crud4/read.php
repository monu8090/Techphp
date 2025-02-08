<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<table class="table table-dark table-striped">
  
  <thead>
  <!-- <button type="button" class="btn btn-primary">Back</button> -->
  <a href=" login_form.php" class=" btn btn-primary">Login</a>
  <button type="button" class="btn btn-warning">Logout</button>
    <t>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Image</th>
      <th scope="col">Data Upload Time</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  session_start();
  if (!isset($_SESSION['user'])){
      header('Location:login_form.php');
  }
  





  $conn = mysqli_connect("localhost","root","","taskwork");
  $sql = "select * from crud4";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($rec = mysqli_fetch_assoc($result)){
  
  ?>
    <tr>
      <th scope="row"><?= $rec['id']?></th>
      <td><?= $rec['name']?></td>
      <td><?= $rec['email']?></td>
      <td><?= $rec['password']?></td>
      <td><?= $rec['phone']?></td>
      <td><?= $rec['message']?></td>
      <td><img height="50px" width="50px" src="upload/<?= $rec['image']?>"></td>
      
      <td><?= $rec['time']?></td>
      <td>
        <a href="delete.php?id=<?= $rec['id']?>" class="btn btn-danger">Delete</a>
      </td>
      <td>
      <a href="update.php?id=<?= $rec['id']?>" class="btn btn-success">Edit</a>
      </td>
    </tr>   
    <?php
            
        }
    }
    ?> 
  </tbody>
</table>
</body>
</html>