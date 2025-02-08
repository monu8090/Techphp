
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
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Image</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "techphp25");
    $sql = "SELECT * FROM multiple_file";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $val = explode(',', ($row['images']));
    ?>
    <tr>
      <th scope="row"><?= $row['id'] ?></th>
      <td>
            <?php
            foreach ($val as $img) {      
            ?>
        <img height="100px" width="100px" src="images/<?= $img ?>" alt="">
        <?php
            }
            ?>
      </td>
      <td><?= $row['created_at'] ?></td>
      <td><a href="delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a></td>
      <td><a href="update.php?id=<?= $row['id']?>" class="btn btn-success">Update</a></td>
    </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>
</body>
</html>
