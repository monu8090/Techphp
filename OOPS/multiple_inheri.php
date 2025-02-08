<?php
class Data{
    function demo(){
        echo "I am Data <br>";
    }
}

class Papa extends Data{
    function demo1(){
        echo "I am papa <br>";
    }
}


class Beta extends Papa{
    function demo2(){
        echo "I am Beta";
    }
}


$beta = new Beta();
$beta-> demo();
$beta-> demo1();
$beta-> demo2();
?>