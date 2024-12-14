<?php
function prime($a) {
    for ($n = 0; $n <= $a; $n++) {
        $isPrime = true; 
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $n."<br>";
        } 
        // else
        //  {
        //     echo "$n not prime.<br>";
        // }
    }
}

prime(13);
?>
