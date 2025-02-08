<?php
class Base{
    function demo(){
        echo "This is the base Class <br>";
    }
}
// new Base();

class Derived extends Base{
    function __construct(){
        echo "This is the Derived class <br>";
    }
}

$derived = new Derived();
$derived-> demo();
?>