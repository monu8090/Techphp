<?php 
class Base{
    public function fisrtMethod(){
        echo "This Base class";
    }
}

class Child extends Base{
    public function firstMethod(){
        echo "This is child class Method";
    }
}

$child = new Child;
$child->firstMethod();
?>