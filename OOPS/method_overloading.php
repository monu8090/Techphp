<?php 
class Base{
    public function demo($a){
        echo "Hello Base CLass";
    }
}

class Child extends Base{
    public function demo($a,$b){
        echo "Hello child class";
    }
}
$child = new Child;
$child->demo(10,10);
?>