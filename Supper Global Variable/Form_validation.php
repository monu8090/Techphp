<form action="" method="Post">

Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit" value="validation" name="validate">

</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
            echo "Name Field is required...";
        }
        else if
            (empty($_POST['email'])){
                echo "Email Fiels is required...";
            }
            else {
                echo $_POST['name']."<br>";
                echo $_POST['email'];
            }
            
        }
    }

?>