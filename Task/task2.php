<?php
$Dibyconn = mysqli_connect("Localhost","root","","techphp25");
// if($Dibyconn){
//     echo"Connection Established...";
// }
// else{
//     echo "Your connection is not established";
// }

// $maurysql = "Create table task2(id int(20),name varchar(20),email varchar(20),phone int(14))";
// echo mysqli_query($Dibyconn,$maurysql)


$maurysql = "Insert into task2(id,name,email,phone) values(1,'Shubham','shubhm@gmail.com',708090100)";
if(mysqli_query($Dibyconn,$maurysql)){
    echo "Data Inserted Successfully...";
}
else{
    echo "Your data not Inserted";
}
?>