<?php 
$a=0;
try{
    if($a==0){
        throw new Exception("Unable to Divide");
    }
    echo 5/$a;
}
catch(Exception $e){
    echo $e->getMessage()."<br>";
    echo $e->getLine()."<br>";
    echo $e->getCode()."<br>";
    echo $e->getFile()."<br>";
}
finally{
    echo "hello Exception";
}
?>