<?php
$data= fopen("File_hand_test.txt","r");
echo fread($data,500);
fclose($data);
?>