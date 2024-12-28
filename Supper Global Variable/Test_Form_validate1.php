<form action="Test_Form_Validate_post.php" method="post">
    Name: <input type="text" name="name">
    <small style="color:red"><?= isset($_GET['nameerror'])? $_GET['nameerror']:''?></small>

    Email: <input type="text" name="email">
    <small style="color:green"><?= isset($_GET['emailerror'])?$_GET['emailerror']:''?></small>

    Phone: <input type="text" name="phone">
    <small style="color:Yellow"><?= isset($_GET['phonerror'])?$_GET['phoneerror']:''?></small>

    Address: <input type="text" name="address">
    <small style="color:Orange"><?= isset($_GET['addresserror'])?$_GET['addresserror']:''?></small>

    <input type="submit" value="validation" name="button-validation">
</form>