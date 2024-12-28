<?php
$conn = mysqli_connect("localhost","root","","techphp25");
// if($conn){
//     echo"data";
// }
// else{
//     echo "not";
// }

// $sql = "create table fetch1(id int(20),name varchar(20),address varchar(50));";
// echo mysqli_query($conn,$sql);

// $sql = "Insert into fetch1 (id,name,address) values(1,'Prakash','pandeypur');";
// $sql .= "Insert into fetch1 (id,name,address) values(2,'Maury','Ashapur');";
// $sql .= "Insert into fetch1 (id,name,address) values(3,'pinku','Varanasi');";
// $sql .= "Insert into fetch1 (id,name,address) values(4,'shivam','Lucknow');";

// mysqli_multi_query($conn,$sql);


print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));

print_r(mysqli_fetch_assoc($result));

while ($record = mysqli_fetch_assoc($result)){    
    print_r($record);
}
?>