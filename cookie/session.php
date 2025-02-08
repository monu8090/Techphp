<?php
session_start();
$_SESSION['user']=['name'=>'Diby','Pass'=>'12345'];
print_r($_SESSION);
?>