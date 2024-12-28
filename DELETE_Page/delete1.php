<?php
$conn = mysqli_connect("localhost","root","","techphp25");
if($conn){
    echo"data";
}
else{
    echo "not";
}

// $sql = "create table delete1(id int(20),name varchar(20),address varchar(50));";
// echo mysqli_query($conn,$sql);

// $sql = "Insert into delete1 (id,name,address) values(2,'Prakash','pandeypur');";
// $sql .= "Insert into delete1 (id,name,address) values(3,'Maury','Ashapur');";
// $sql .= "Insert into delete1 (id,name,address) values(4,'pinku','Varanasi');";
// $sql .= "Insert into delete1 (id,name,address) values(5,'shivam','Lucknow');";

// mysqli_multi_query($conn,$sql);

 $sql = "Delete from delete1 where id=2";     // Delete Query

 mysqli_multi_query($conn,$sql);

echo mysqli_affected_rows($conn);   // Kitna data delete number show karta hai
?>