<?php  
class Test{
    protected $name="Dipanshu";
    protected function demo(){
        echo "Hello This is Protected property";
    }
    public function all(){
        echo $this->name;

        echo $this->demo();
    }
}

$test = new Test;
echo $test->all();

class Child extends Test{
    function hello(){
        echo "Hiiii";
        echo $this->demo();
    }
}
?>