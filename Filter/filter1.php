<form?php
$email = "dibymonu8090@gmail.com";
$id = "10a";
echo filter_var($id,FILTER_SANITIZE_NUMBER_INT);
echo isset($_POST['email'])?$_POST['email']:'';
?>

<form action="" method="post">
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>