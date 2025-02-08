<?php
class Car{
    function engine(){
        echo "Engine Start";
    }
    function gear(){
        echo " 5 Gear";
    }
}
$nano = new Car();
$bmw = new Car();




$nano->engine();
$nano->gear();



$bmw->engine();
$bmw->gear();
?>