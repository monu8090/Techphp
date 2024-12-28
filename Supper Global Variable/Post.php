<?php
// echo "<pre>";
// print_r($_POST);



// next type

echo "My Name is : ".$_POST['name']."<br>";
echo "My Email is : ".$_POST['email']."<br>";
echo "My Number is : ".$_POST['phone']."<br>";

?>

<form action="" method="post">

<label for="">name</label>
<input type="text" name="name">

<label for="">Email</label>
<input type="text" name="email">


<label for="">Phone</label>
<input type="text" name="phone">
<input type="submit">
</form>