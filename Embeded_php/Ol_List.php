<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ol type="1">

 <h3>Total fifty Country Name...</h3>
<?php

$country=[ "Afghanistan", "Albania", "Algeria", "Andorra", "Angola",
"Argentina", "Armenia", "Australia", "Austria", "Azerbaijan",
"Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus",
"Belgium", "Belize", "Benin", "Bhutan", "Bolivia",
"Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria",
"Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada",
"Cape Verde", "Central African Republic", "Chad", "Chile", "China",
"Colombia", "Comoros", "Congo", "Costa Rica", "Croatia",
"Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
"Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador"
];
foreach ($country as $value)
{
    echo "<li> $value</li>";
}

?>
</ol>
</body>
</html>
