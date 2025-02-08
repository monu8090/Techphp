<?php 
class Test{
    public $name;
    public function demo(){
        echo $this->name; //Property getter
        echo "Hello demo";
    }
}
$test = new Test;
$test->name="Diby";  //Property setter
$test->demo();
?>