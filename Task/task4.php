<?php
$conn = mysqli_connect("localhost","root","","techphp25");
// if ($conn){
//     echo"Connect This page...";
// }
// else{
//     echo "Not Connected...";
//     echo mysqli_connect_error();
// }
// $sql = "Create table task4(id int(20),name varchar(30),email varchar(30))";
// echo mysqli_query($conn,$sql)


$sql = "insert into task4(id,name,email) values(1,'rohit','rohit@gmail.com')";
if(mysqli_query($conn,$sql)){
    echo"Data Inserted...";
}
else{
    echo "Your data is not inserted...";
}
?>






