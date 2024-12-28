<?php
$con = mysqli_connect("localhost","root","","techphp25");


$sql = "Insert into users(id,name,email) values(2,'Prakash','prakash@gmail.com');";
$sql .= "Insert into users(id,name,email) values(3,'maury','maurya@gmail.com');";
$sql .= "Insert into users(id,name,email) values(4,'monu','monu@gmail.com');";

 mysqli_multi_query($con,$sql);



 
?>