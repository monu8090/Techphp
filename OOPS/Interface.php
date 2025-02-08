<?php  
interface Test{
    public function demo();
    public function hello();

}

class Demo implements Test{
    public function hii(){
        echo "This is Hiii";
    }
    public function demo(){
        echo "This is demo interface";
    }
    public function hello(){
        echo "This is hello interface";
    }
}

$demo = new Demo;
$demo->hii();
$demo->demo();
$demo->hello();

?>