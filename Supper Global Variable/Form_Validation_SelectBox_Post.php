<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    if(isset($_POST['btn-validation'])){
        if(empty($_POST['country'])){
           header('Location:Form_Validation_SelectBox.php?countryerror=Please select your Country...');

        }
        elseif(empty($_POST['gender']))
        {
            header('Location:Form_Validation_SelectBox.php?gendererror=Please select your Gender...');

        } else{
            echo $_POST['country']."<br>";
            echo $_POST['gender'];
        }
    }
}

?>

