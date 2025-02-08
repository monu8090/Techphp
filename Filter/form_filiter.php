<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

    if(empty($name)){
        echo "Name Is Required";
    }
    elseif( empty($email)){
        echo "Email is Required...";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Please Enter a Valid Email";
    }
    else{
        echo "Email Is valid";
    }
}
?>

<form action="" method="post">
<input type="text" name="name" Required>
<input type="email" name="email" Required>
<button type="submit">Click</button>

</form>