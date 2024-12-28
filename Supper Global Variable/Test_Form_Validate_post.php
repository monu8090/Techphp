<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['button-validation'])){
        if(empty($_POST['name'])){
            header('Location:Test_Form_validation1.php?nameerror=name Field Is Required...');
        }
        elseif(empty($_POST['email'])){
            header('Location:Test_Form_validation1.php?emailerror=email Field IS Requried...');
        }
        elseif(empty($_POST['phone'])){
            header('Location:Test_Form_validation1.php?phoneerror=phone Field IS Requried...');
        }
        elseif(empty($_POST['address'])){
            header('Location:Test_Form_validation1.php?addresserror=address Field IS Requried...');
        }
        else{
            echo "My name is :-".$_POST['name']."<br>";
            echo "My Email ID IS;-".$_POST['email']."<br>";
            echo "My phone number is :-".$_POST['phone']."<br>";
            echo "My Address  IS;-".$_POST['address'];
        }
    }
    else{
        echo "Invalid Request...";
    }
}

?>