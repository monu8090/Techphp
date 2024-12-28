<?php
$x=10;  // [x'=>10]
function demo(){
  echo $GLOBALS['x'];
  $GLOBALS['y']=20;
}
demo();
echo $y;
?>