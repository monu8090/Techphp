<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=se;ect, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <option value="">--Select Country</option>
        <?php
        $country = ["India","pakistan","Tazakistan"];
        foreach($country as $value){
        ?>
        <option value=""><?= $value?></option>
        <?php
        }
        ?>
      
    </select>
</body>
</html>