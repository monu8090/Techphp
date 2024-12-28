<?php
$a=10;
$b=20;

function globalVar(){
    global $a,$b;
    echo $a,$b."<br>";
}
globalVar();
echo "This is the global variable :".$a;
?>