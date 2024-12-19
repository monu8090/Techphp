<?php
$date = mktime(01,30,59,12,05,2024);
echo date("Y/m/d h:i:sa",$date)."<br>";
$date = strtotime("10/20/2006");
echo date("Y-m-d", $date)."<br>";

include("include.php")
?>