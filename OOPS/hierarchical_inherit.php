<?php
class Base{
    function demo(){
        echo "This is base class <br>";
    }
}
class Child extends Base {
    function test(){
        echo "this is first child <br>";
    }
}
$child = new Child;
$child->demo();
$child->test();


class Second extends Base{
    function hello(){
        echo "This is second child... <br>";
    }
}

$second = new Second;
$second->demo();
$second->hello();

?>