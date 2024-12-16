<?php
// speread operator This(...)
function variableLength(...$list){
    echo "Hello";
    print_r($list);
}
variableLength(1,2,3,4,5,6,7,8,9,10);
?>