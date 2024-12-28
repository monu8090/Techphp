<?php
$age = 20;
switch($age){
    case 0:
        echo "Invalid Age...";
        break;
    case $age >=18:
        echo "Eligible For Vote";
        break;
    case $age <18:
        echo "Not Eligible For Vote";
        break;
    default:
        echo "No Data Match...";
        break;
}
?>