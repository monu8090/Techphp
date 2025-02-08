<?php
$conn = mysqli_connect("localhost","root","","techphp25");
if ($_SERVER['REQUEST_METHOD']=='POST'){

foreach($_FILES['file']['name']as $key=>$val){
    move_uploaded_file($_FILES['file']['tmp_name'][$key],"images/$val");
}
$images = implode(',',$_FILES['file']['name']);
$sql = "insert into multiple_file(images) values ('$images')";
if(mysqli_query($conn,$sql)){
    echo "Images Uploaded";
}
else{
    echo "<script>
    alert('Successfully Image Uploaded...');
    window.location.href='read.php';
</script>";
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

    File: <input type="file" multiple  name="file[]" id="">
    <button type="submit">Upload</button>
    </form>
</body>
</html>