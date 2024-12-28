<?php
$con = mysqli_connect("localhost","root","","techphp25");
if ($con){
    echo"Connection Establish";
}
else{
    echo "Not Connected";
    echo mysqli_connect_error();
}
?>