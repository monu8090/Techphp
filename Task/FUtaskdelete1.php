<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','taskwork');
    $sql = "delete from futask1 where id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Delete Data...');
        window.location.href='FUread1.php';
        </script>";
        
    }
    else{
        header("Location:FUread1.php");
    }
}
?>