<?php
class Demo{
    function __construct($name,$num){
        echo "$name Construct $num";
    }
    
}

$demo = new Demo("Hello",63);
?>