<?php
$con = mysqli_connect("localhost","root","","techphp25");


$sql = "Insert into users(name,email) values('keval','keval@gmail.com');";

if(mysqli_query($con,$sql)){
    echo mysqli_insert_id($con);
} 
?>


<!-- Auto Incriment Query THis -->