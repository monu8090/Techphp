<?php
$a=20;  // ;- Assigenment Operator
$b=10;
echo $a+$b;  // Arithmetic Operator 
print('<br>');
echo $a-$b;   // Arithmetic Operator
print('<br>'); 
echo $a*$b;   // Arithmetic Operator 
print('<br>');
echo $a/$b;   // Arithmetic Operator 
print('<br>');
echo $a%$b;   // Arithmetic Operator 

print('<br>');
$a +10;  // $a=$a+10;
echo $a;
print('<br>');



// New program start

?>



<?php
$name="Diby";
$Second="Prakash";
echo $name." ".$Second;
print('<br>');
?>



<!--  Boolean Opertor Use dump  function for use  -->
<?php
$c=$a>=10;
var_dump($c);
print('<br>');
?>


<!-- Logical Operator -->
 <?php
 $a=10;
 $b=20;
 $c=$a||$b;
 echo $c;
 print('<br>');
 ?>

 <!-- Logical Operator 2nd type -->
 <?php
 $a=10;
 $b=20;
 $c=$a>10||$b<10;
 echo $c;
 print('<br>');
 ?>



 <!-- NOT Logical Operator 2nd type -->
 <?php
 $a=10;
 $b=20;
 $c=$a!=10;
 echo $c;
 print('<br>');
 ?>


<!-- Uniory Operator -->

<?php
$a=9;
$b=20;
echo $a++ +$a;
print('<br>');
 ?>
<!-- 
 Turnary Operator -->
 <?php
 $a=9;
 $b=20;
 echo $a !=$b ? "Hello" : "jai Mata Di...";
 echo $c;
 print('<br>');
 ?>