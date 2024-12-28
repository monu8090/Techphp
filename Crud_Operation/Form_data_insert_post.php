<?php
$con = mysqli_connect("localhost","root","","techphp_crud");
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Please Enter the name');
        window.location.href='Form_data_insert.php';
        </script>";
    }elseif(empty($_POST['lastname'])){
        echo "<script>
        alert('Please Enter the Lastname');
        window.location.href='Form_data_insert.php';
        </script>";
    }elseif(empty($_POST['email'])){
        echo "<script>
        alert('Please Enter the email');
        window.location.href='Form_data_insert.php';
        </script>";
    }
    else{
        $name= $_POST['name'];
        $lastname= $_POST['lastname'];
        $email= $_POST['email'];

        $sql = "Insert into crud_insert(name,lastname,email) values('$name','$lastname','$email')";

        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('Data Inserted Successfully');
            window.location.href='Read.php';
            </script>";
        }
    }
}
?>