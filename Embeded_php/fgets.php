<?php
// $data= fopen("File_hand_test.txt","r");
// // echo fread($data,filesize('File_hand_test.txt'));
// // echo fgets($data);
// echo fgetc($data);
// fclose($data);


// Loop using Method

$data= fopen("File_hand_test.txt","r");
while(!feof($data)){
echo fgets($data);
}
fclose($data);
?>