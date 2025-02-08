<?php
class Fruit{
    function mango(){
        echo "Aha mango";
    }
    function banana(){
        echo "This is Kela";
    }

    function apple(){
        echo "This is sev";
    }
}



$fruit = new Fruit;
$fruit-> mango();
$fruit->banana();
$fruit->apple();
?>