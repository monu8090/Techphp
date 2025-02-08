<?php
$conn = mysqli_connect("localhost","root","","techphp25");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo'<script>
        alert("Name Field Required...");
        </script>';
    }
    else if(empty($_FILES['image']['name'])){
        echo '<script>
        alert("File  Uploaded...");
        </script>';
    }
    else{
        $name = $_POST['name'];
        $filename = time().$_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"upload/$filename");
        $sql = "insert into file_upload(name,image) values('$name','$filename')";
        if(mysqli_query($conn,$sql)){
            echo'<script>
            alert("successfully  image upload...");
            window.location.href="read.php";
            </script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

    Name:<input type="text"  name="name" id="name">
    File: <input type="file" name="image">
    <button type="submit">Submit</button>
    </form>
</body>
</html>