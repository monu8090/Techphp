<?php
$arr = ['Hello'=>'name',"name"=>'email',"hiii"=>'phone'];
$json = json_encode($arr,JSON_PRETTY_PRINT);
echo "<pre>";
echo $json;




// For decoding json into associative array or php object format.


$decode = json_decode($json,true);
print_r($decode);
echo $decode['hello'];
?>