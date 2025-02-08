

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
    <a href="FUtask1.php" class="btn btn-success">Back</a>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Country</th>
      <th scope="col">Message</th>
      <th scope="col">Image</th>
      <th scope="col">Uploading Time</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>

    </tr>
    <?php
$conn = mysqli_connect("localhost","root","","taskwork");
$sql = "select * from futask1";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $row['id']?></th>
      <td><?= $row['name']?></td>
      <td><?= $row['email']?></td>
      <td><?= $row['phone']?></td>
      <td><?= $row['gender']?></td>
      <td><?= $row['country']?></td>
      <td><?= $row['message']?></td>
      <td><img height="50px" width="50px" src="upload/<?= $row['image']?>" alt=""></td>
      <td><?= $row['Time']?></td>
     
      <td><a href="FUtaskupdate1.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a></td>
      <td> <a href="FUtaskdelete1.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>
      
    </tr>
   <?php
       }
    }
   ?>
   
  </tbody>
</table>
</body>
</html>