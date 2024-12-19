<?php
$res = fopen('demo.txt','a');
fwrite($res,"It is Demo File ....");
fclose($res);
?>