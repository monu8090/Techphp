<?php
// if($_SERVER["REQUEST_METHOD"]=='POST'){
//     if(isset($_POST['validatecheck'])){
//         if(isset($_POST['subject'])){
//             echo'Please Select Altleast Onre subject';
//         }else{
//             print_r($_POST['POST']);
//         }
//     }
// }
?>

<form action="Form_validation_CheckBox_post.php" method="post">
    <label for="">Subject</label>
    Math <input type="checkbox" name="subject[]" value="math"><br>
    
    Science <input type="checkbox" name="subject[]" value="science"><br>
    
    Hindi <input type="checkbox" name="subject[]" value="hindi"><br>
    <input type="submit" name="validatecheck">

</form>