<?php
class factorial{
   
    function fact($num){
        $fact=1;
    for($i=1;$i<=$num;$i++){
        $fact=$fact*$i;
    }
    echo"Factorial=".$fact;
}
}
$fact = new factorial();
$fact->fact(5);
?>




