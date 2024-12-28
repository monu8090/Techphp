<?php
$conn = mysqli_connect("localhost","root","","techphp25");
if($conn){
    echo"data";
}
else{
    echo "not";
}

// $sql = "create table select1(id int(20),name varchar(20),address varchar(50));";
// echo mysqli_query($conn,$sql);

// $sql = "Insert into select1 (id,name,address) values(1,'Prakash','pandeypur');";
// $sql .= "Insert into select1 (id,name,address) values(2,'Maury','Ashapur');";
// $sql .= "Insert into select1 (id,name,address) values(3,'pinku','Varanasi');";
// $sql .= "Insert into select1 (id,name,address) values(4,'shivam','Lucknow');";

// mysqli_multi_query($conn,$sql);

$sql = "Select * from select1";
$result = mysqli_query($conn,$sql);
echo mysqli_num_rows($result);
echo "<pre>";

?>