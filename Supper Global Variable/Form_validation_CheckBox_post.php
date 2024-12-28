<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    if(isset($_POST['validatecheck'])){
        if(empty($_POST['subject'])){
            echo"<script> 
            alert('Please Select the one Subject');
            window.location.href='Form_validation_CheckBox.php'
            </script>";
            // echo'Please Select Altleast Onre subject';
        }else{
            print_r($_POST['subject']);
        }
    }
}
?>