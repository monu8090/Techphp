<?php
if(isset($_GET["id"])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','taskwork');
    $sql = "Delete from taskcontectus where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Your Data Delete Successfully');
        window.location.href='Taskcrudread.php';
        </script>";
    }
    else{
        header("Location:Taskcrudread.php");
    }
}
?>