<?php
$data= fopen("File_hand_test.txt","r");
echo fread($data,filesize('File_hand_test.txt'));
fclose($data);
?>