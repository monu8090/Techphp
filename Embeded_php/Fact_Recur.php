<?php
function fact($num) {
    if ($num==0) {
        return 1;
    }
    return $num*fact($num-1);    // fact=fact*i
}

echo "My Fact Answer:".fact(5);
?>
