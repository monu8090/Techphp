<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "techphp25");
    $sql = "Delete from multiple_file where id=$id";
    if(mysqli_query($conn,$sql)){
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