
<?php
$fact = function() {
   $fact=1;
   for ($i=1;$i<=5;$i++) {
       $fact=$fact*$i;
   }
   return $fact;
};
echo $fact();
?>




