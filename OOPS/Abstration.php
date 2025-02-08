<?php 
abstract class Test{
    abstract public function demo($a);

    
} 
class Demo extends Test{
    public function demo($b){
        echo "This is abstract method $b";
    }
    public function hello(){
        echo "This is second class";
    }
}

$demo = new Demo();
$demo->demo("Right");
?>