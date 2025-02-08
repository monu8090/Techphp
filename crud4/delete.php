<?php 
session_start();
if (!isset($_SESSION['user'])){
    header('Location:login_form.php');
}






if (isset($_GET['id'])){
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost","root","","taskwork");
    $sql = "Delete from crud4 where id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Record Deleted Succesfully....');
        window.location.href='read.php';
        </script>";
    }
}
else{
    header("Location:read.php");
}
?>