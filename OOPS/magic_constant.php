<?php
namespace First;
echo __DIR__."<br>";
echo __FILE__."<br>";


function demo(){
    echo __FUNCTION__."<br>";
}
demo();

echo __LINE__."<br>";


class Test{
    function hello(){
        echo __CLASS__."<br>";
        echo __METHOD__."<br>";
       }
}

$t = new Test;
$t->hello();
echo __NAMESPACE__;
?>