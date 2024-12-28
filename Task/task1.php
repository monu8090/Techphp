<?php
$con = mysqli_connect("localhost","root","","techphp25");
// if ($con){
//     echo"Connect This page...";
// }
// else{
//     echo "Not Connected...";
//     echo mysqli_connect_error();
// }
 
// $sql = "Create table task1(id int(20) primary key,name varchar(20),email varchar(25),phone int(20))";

// if(mysqli_query($con,$sql)){
//     echo "Table Created...";
// }
// else{
//     echo mysqli_error($con);
// }

$sql = "Insert into task1(name,email,phone) values('Kaushal','Kaushal@gmail.com',9999923218)";
if(mysqli_query($con,$sql)){
    echo "data Inserted Successfully";
}
else{

        echo mysqli_error($con);
}

?>