<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" value="" placeholder="Enter The number" name="prime">
    <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $number = isset($_POST['prime']) ? $_POST['prime'] : null;
    if (is_numeric($number) && $number > 0) {
        $number = (int)$number;

        if ($number == 1) {
            echo "<p>$number is not a prime number</p>";
        } else {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "<p>$number is a prime number.</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        }
    } else {
        echo "<p>Please enter the Prime number.</p>";
    }
}
?>