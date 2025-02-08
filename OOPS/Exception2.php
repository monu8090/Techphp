<?php 
try{
    for($i=5;$i>=0;$i--){
        if($i==0){
            throw new Exception("Unable to Drive");
        }
        echo 5/$i."<br>";
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
?>