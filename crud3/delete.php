<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','techphp25');
    $sql ="Delete form all_field where id=$id";
    // if($con,$sql)
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