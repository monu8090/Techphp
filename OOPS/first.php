<?php
class ClassName{
    public $name = "Diby";    // Property
    function demo(){
        $name1 = "Hello";
        return $name1;
    }
}

$obj = new ClassName;  //Object
// $abc = new ClassName;
// var_dump($obj);
echo $obj->name;
// echo $abc->name;
echo $obj->demo();
 
?>