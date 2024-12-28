<?php
$conn = mysqli_connect("localhost","root","","techphp25");
// if($conn){
//     echo"data";
// }
// else{
//     echo "not";
// }

// $sql = "create table task7(id int(20),name varchar(20),address varchar(50));";
// echo mysqli_query($conn,$sql);


// $sql = "insert into task7(id,name,address) values (1,'hju','banaras');";
// $sql .= "insert into task7(id,name,address) values (2,'shivai','varansi');";
// $sql .= "insert into task7(id,name,address) values (3,'nandani','dafi');";
// $sql .= "insert into task7(id,name,address) values (4,'shreya','salarpur');";

// $sql = "Delete from task7 where id=2";     // Delete Query

// mysqli_multi_query($conn,$sql);

//echo mysqli_affected_rows($conn);   // Kitna data delete number show karta hai





// $sql = "Select * from task7";
// $result = mysqli_query($conn,$sql);
// echo mysqli_num_rows($result);
// echo "<pre>";






// print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));

// print_r(mysqli_fetch_assoc($result));

// while ($record = mysqli_fetch_assoc($result)){     // this code while loop during all data fetch
//     print_r($record);
// }




// Update Query


$sql = "update task7 set name='Kajal' ,address='Koniya Varansi' where id=4";

mysqli_query($conn,$sql);
echo mysqli_affected_rows($conn);

?>