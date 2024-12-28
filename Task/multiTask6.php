<?php
$conn = mysqli_connect("localhost", "root", "", "techphp25");
// if($conn){
//     echo "Done";
// }
// else{
//     echo "Not";
// }

// $sql = "create table taks6(id int(10),name varchar(20),email varchar(20))";
// echo mysqli_query($conn,$sql);

$sql = "Insert into taks6(id,name,email) values(1,'deepak','deepak@gmail.com');";
$sql .= "insert into taks6(id,name,email) values(2,'Sonali','sonali@gmail.com');";
$sql .= "insert into taks6(id,name,email) values(3,'saket','saket@gmail.com');";
$sql .= "insert into taks6(id,name,email) values(4,'vimal','vimal@gmail.com');";
$sql .= "insert into taks6(id,name,email) values(5,'suman','suman@gmail.com');";

mysqli_multi_query($conn, $sql);
?>
