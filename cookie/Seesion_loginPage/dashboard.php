<?php
session_start();
if (!isset($_SESSION['logindata'])){
    header('Location:login.php');
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
 <h1> Welcome TO Dashboard</h1>,<?= $_SESSION['logindata']?>
<a href="login.php">logout</a>
</body>
</html>