<!-- Implicit Typecasting -->
<?php
$var=100;
$second='10';
$data=$var+$second;
echo $data;
echo gettype($data);
echo "<br>";
?>
<!-- Implicit Typecasting  in second type  concatenation  -->
<?php
$var=100;
$second='10';
$data=$var.$second;
echo $data;
echo gettype($data);
?>  