<?php
$res = fopen("demo.txt","r+");
echo fread($res,filesize("demo.txt"));
fwrite($res,"This is read write mode");
echo fread($res,filesize("demo.txt"));
fclose($res);
?>