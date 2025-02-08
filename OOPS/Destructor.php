<?php
class Demo{
    function __destruct(){
        echo "Hello Desstruct";
    }
    function __construct(){
        echo "Hello Constructor <br>";
    }
    function test(){
        echo "Hello Test <br>" ;
    }
}

$demo = new Demo();
$tesing = new Demo();
?>