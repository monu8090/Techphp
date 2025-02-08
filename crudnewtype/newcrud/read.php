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
    <a href="create.php" class="btn btn-primary">Create Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Username</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th scope="col">Subject</th>
                <th scope="col">Description</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $con = mysqli_connect('localhost','root','','app25_crud');
             $sql = "Select * from all_field";
             $result = mysqli_query($con,$sql);
             if(mysqli_num_rows($result)>0){
                while($rec = mysqli_fetch_assoc($result)){
            ?>
               <tr>
                    <th scope="row"><?= $rec['id']?></th>
                    <td><?= $rec['username']?></td>
                    <td><?= $rec['dob']?></td>
                    <td><?= $rec['gender']?></td>
                    <td><?= $rec['country']?></td>
                    <td><?= $rec['subject']?></td>
                    <td><?= $rec['description']?></td>
                    <td><?= $rec['created_at']?></td>
                    <td>
                        <a href="delete.php?id=<?= $rec['id']?>" class="btn btn-danger">Delete</a>
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
