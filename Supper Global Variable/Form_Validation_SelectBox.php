<form action="Form_Validation_SelectBox_Post.php" method="post">
    Country: <select name="country" id="">
    <option value="">--Select Option---</option>
    <option value="india">India</option>
    <option value="pakistan">Pakistan</option>
    <option value="nepal">Nepal</option>
    <option value="dubai">Dubai</option>
    </select>
    <small style="color:red;">
        <?= isset($_GET['countryerror'])? $_GET['countryerror']:''?>
    </small>
    <br>
    Gender : <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <?= isset($_GET['gendererror'])? $_GET['gendererror']:''?>

    <input type="submit" name="btn-validation" value="Submit">
</form>