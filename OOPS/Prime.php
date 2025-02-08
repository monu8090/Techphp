<?php
class PrimeNumber {
    function Prime($num) {
        if ($num <= 1) {
            echo "$num  not prime number.";
            return;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                echo "$num  not a prime number.";
                return;
            }
        }

        echo "$num is a prime number.";
    }
}

$prime = new PrimeNumber();
$prime->Prime(14);
?>