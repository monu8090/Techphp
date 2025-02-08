<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','app25_crud');
    $sql = "Delete from all_field where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('Record Deleted successfully');
            window.location.href='read.php';
        </script>";
    }
}else{
    header('Location:read.php');
}
?>