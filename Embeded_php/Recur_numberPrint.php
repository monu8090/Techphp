<?php
function number($num){
    if ($num <=10){
        echo $num."<br>";
        return number($num+1);
    }
}
number(1);
?>