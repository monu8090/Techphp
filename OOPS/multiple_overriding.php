<?php 
class Base{
    public function firstMethod(){
    echo "This is the class method";
    }
}
class Child extends Base{
    public function firstMethod(){
        echo "this is child class Method";
    }
    public function base(){
        parent::firstMethod();
    }
}
 $child = new Child;
 $child->firstMethod();
 $child->base();
?>