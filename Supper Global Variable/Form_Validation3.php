<form action="Form_Validation3_Post.php" method="Post">

Name: <input type="text" name="name">
<small style="color:red"><?= isset($_GET['nameerror'])? $_GET['nameerror']:''?></small>
Email: <input type="text" name="email">
<small style="color:red"><?= isset($_GET['emailerror'])? $_GET['emailerror']:''?></small>
<input type="submit" value="validation" name="button-validate">

</form>
