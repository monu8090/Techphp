<?php  
class Demo{
    const Test = "Hello Test";
    function test(){
        echo self::Test;
    }
}
$demo = new Demo;
echo Demo::Test;
$demo->test();
?>