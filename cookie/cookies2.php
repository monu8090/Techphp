<?php
setcookie("use",$_SERVER['REMOTE_ADDR'],time()+3600);
print_r($_COOKIE);
?>