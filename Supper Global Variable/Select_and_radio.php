<form action="" method="post">

<div>
    <select name="country" id="">
        <option value="">---Select Option---</option>
        <option value="india">India</option>
        <option value="nepal">Nepal</option>
        <option value="america">America</option>
    </select>
</div>
 
<div>
    <label for="">Gender:</label>
    <input type="radio" name="gender" value="male">Male
    
    <input type="radio" name="gender" value="male">Female
    <input type="color" name="color">

    <input type="submit">
</div>
</form>

<div style="height:100px; width:100px; background:<?= $_POST['color']?>"></div>

<?php
print_r($_POST)

?>