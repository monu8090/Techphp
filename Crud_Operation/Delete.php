<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect("localhost","root","","techphp_crud");
    $sql = "Delete from crud_insert where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Your Data Delete Successfully');
        window.location.href='read.php';
        </script>";
    }
    else{
        header('Location:read.php');
    }
}
?>