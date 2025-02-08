<?php 
class Test{
    public $name;
    public function demo($name1){
        $this->name=$name1;   // Property setter
        echo "Hello Demo";
    }
    public function hello(){
        echo $this->name;
    }
}
$test = new Test;
$test->demo("Diby");
echo $test->name; // Property getter
$test->hello();
?>