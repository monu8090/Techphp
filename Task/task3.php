<?php
$conn=mysqli_connect("localhost","root","","techphp25");
// $sql = "Create table task3(id int(20), name varchar(30))";
// echo mysqli_query($conn,$sql)
$sql = "Insert into task3(id,name) values(1,'Shivani')";
if(mysqli_query($conn,$sql)){
    echo "Data Inserted...";

}
else{
echo "your data not inserted...";
  echo mysqli_error($con);
}
?>