<?php
// include 'Name_space.php';
// $f = new First\Hello;
// $s = new Second\Hello;
// $f ->demo();
// $s->demo();
?>



<?php 
include 'Name_space.php';
use First\Demo\Test\Hello as h;
$f = new h;
$s = new Second\Hello;
$f ->demo();
$s->demo();
?>