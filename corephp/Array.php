<?php

// // Indexed Array this
// $name=["Diby","Prakash","Kaju"]; 

// // Associative Array this
// $age = ["Prakash"=>25,"Diby"=>20,"kaju"=>23];
// print_r($name[2]);
// print_r($age["kaju"]);



// For each Use 



// Indexed Array this
$name=["Diby","Prakash","Kaju"]; 

// Associative Array this
$age = ["Prakash"=>25,"Diby"=>20,"kaju"=>23];
foreach($name as $val){
    echo $val."<br>";
}

foreach($age as $key=>$val){
    echo $key. "ka Age =".$val."<br>";
} 
?>