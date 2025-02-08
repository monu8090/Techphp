<?php 

class Test{
    public $name="Diby";
    public $age = 23;
    public function demo(){
        echo $this->name."<br>";
        return "Public Method and property<br>";
    }
}
$test = new Test;
echo $test->name,$test->age;
echo $test->demo();


class Child extends Test{
    public function test(){
        echo $this ->name;
    }
}
$child = new Child;
echo $child-> test();
?>