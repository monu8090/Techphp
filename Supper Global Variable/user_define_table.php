
<form action="" method="post">
   Number:<input type="text" name="number">
   <input type="submit">
</form>



<?php
$num = $_POST['number'];
for($i=1;$i<=10;$i++){
    echo $num*$i."<br>";
}
?>
