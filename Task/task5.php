<?php
$conn = mysqli_connect("localhost","root","","techphp25");
// if($conn){
//     echo"Connection Estblished...";
// }
// else{
//     echo mysqli_connect_error();
// }

// $sql = "create table task5(id int(10),name varchar(30),address varchar(50))";
// echo mysqli_query($conn,$sql)

$sql = "insert into task5(id,name,address) values(1,'sonam','absnbjdsf')";
if(mysqli_query($conn,$sql)){
    echo "data Inserted ";
}
else{
    echo mysqli_error($conn);
}
?>