<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <option value="">...Select Country</option>
        <?php
        $country = ["India", "Pakistan", "Tazakistan", "America", "China"];
        // for ($i = 0; $i <= 4; $i++) {
        //     echo "<option value=''>$country[$i]</option>";
        foreach ($country as $value) :
            echo "<option value=''>$value</option>";
        endforeach;
        ?>
    </select>
</body>
</html>
