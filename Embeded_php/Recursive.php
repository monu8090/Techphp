<?php
function number($num){
    if ($num >5){
        return $num;
    }
    return number($num+1);
}
echo number(1);
?>