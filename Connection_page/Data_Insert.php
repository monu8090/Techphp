<?php
$con = mysqli_connect("localhost","root","","techphp25");
if ($con){
    echo"Connection Establish";
}
else{
    echo "Not Connected";
    echo mysqli_connect_error();
}

// $sql = "Create table users(id int(20) primary key, name varchar(25), email varchar(50))";
// echo mysqli_query($con,$sql)

$sql = "Insert into users(id,name,email) values(1,'Diby','diby@gmail.com')";
if(mysqli_query($con,$sql)){
    echo "data Inserted Successfully";
}
else{
    echo mysqli_error($con);
}
?>