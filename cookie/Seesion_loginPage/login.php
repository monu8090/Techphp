<?php
// session_start();
// if(isset($_SESSION['logindata'])){
//     header("Location:dashboard.php");
// }


if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=='diby@gmail.com' && $password== '12345'){
        // echo 'Hello';
        session_start();
        $_SESSION['logindata']=$username;
        header("Location:dashboard.php");
    }
    else{
        echo'<script>
        alert("Username or Password is not match...");
        </script>';
    }
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
    
    <form action="" method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <button type="submit">Login</button>
        
    </form>
</body>
</html>