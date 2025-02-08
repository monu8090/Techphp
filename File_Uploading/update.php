<?php
$conn = mysqli_connect("localhost","root","","techphp25");
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    if(empty($_FILES['image']['name'])){
        $filename = $_POST['oldimage'];
    }
    else{
        $filename = time().$_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"upload/$filename");
    }
    $sql = "update file_upload set name= '$name',image= '$filename' where id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Image Updateed...');
        window.location.href='read.php';
        
        </script>";
    }
}


if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "Select * from file_upload where id=$id";
    $single = mysqli_query($conn,$sql);

    if(mysqli_num_rows($single)>0){
        $result = mysqli_fetch_assoc($single);

//     }
// }
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
Name:<input type="text"  name="name" id="name" value="<?= $result['name']?>">
File: <input type="file" name="image">
<input type="hidden" value="<?= $result['image']?>" name="oldimage">
<input type="hidden" value="<?= $result['id']?>" name="id">

<img src="upload/<?= $result['image']?>" height="50px" width="50px" alt="">
<button type="submit">Submit</button>
</form>
</body>
</html>
<?php
    }
}
else{
    header('Location:read.php');
}
?>