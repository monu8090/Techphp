<?php
$res = fopen("Com.jpg",'r');
$photo = fread($res,filesize("Com.jpg"));
$dest = fopen("Computer.jpg",'w');
fwrite($dest,$photo);
fclose($dest);
fclose($res);
?>