<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','techphp25');
    $sql ="Delete from file_upload where id=$id";
    if(mysqli_query($con,$sql)){
        echo"<script>
        alert('Delete Data...');
        window.location.href='read.php';
        </script>";
    }
    else{
        header("Location:read.php");
    }
    
}
?>