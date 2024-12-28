<?php
function staticVar(){
    static $a=10;
    $a++;
    echo $a;
}
staticVar();
?>