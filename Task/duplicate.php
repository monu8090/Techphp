<?php
function dupli($array){
    $count = array_count_values($array);
    $dup =[];
    foreach($count as $key => $value){
        if($value>1){
            $dup[]=$key;
        }
    }
    }