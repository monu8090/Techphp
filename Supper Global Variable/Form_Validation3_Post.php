<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['button-validate'])){
        if(empty($_POST['name'])){
            header('Location:Form_Validation3.php?nameerror=Name Field Is Required...');

        }
        elseif(empty($_POST['email'])){
            header('Location:Form_Validation3.php?emailerror=Name Email Is Required...');  
        }
        else {
            echo "My Name Is :-".$_POST['name']."<br>";
            echo "and email is :- ".$_POST['email'];
        }
    }
    else{
        echo "Invalid Request...";
    }
}

?>