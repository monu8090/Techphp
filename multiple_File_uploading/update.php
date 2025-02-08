<?php
$conn = mysqli_connect("localhost", "root", "", "techphp25");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    if (empty($_FILES['image']['name'])) {
        $filename = $_POST['oldimage'];
    } else {
        $filename = time() . $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname, "images/$filename");
    }
    $sql = "UPDATE multiple_file SET images='$filename' WHERE id=$id"; // Corrected the column name to 'images'
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Images Updated...');
        window.location.href='read.php';
        </script>";
    }
}
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM multiple_file WHERE id=$id";
    $single = mysqli_query($conn, $sql);

    if (mysqli_num_rows($single) > 0) {
        $result = mysqli_fetch_assoc($single);
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
        File: <input type="file" name="image" id="">
        <input type="hidden" value="<?= $result['images'] ?>" name="oldimage">
        <input type="hidden" value="<?= $result['id'] ?>" name="id">
        <img src="images/<?= $result['images'] ?>" height="50px" width="50px" alt="">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
    }
} else {
    header('Location:read.php');
}
?>
