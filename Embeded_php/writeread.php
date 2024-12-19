<?php
$res = fopen("techsima.txt",'w+');
fwrite($res,"This is test file");
fseek($res,0);
echo fread($res,filesize("techsima.txt"));
fclose($res);