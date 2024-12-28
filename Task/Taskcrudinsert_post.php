<?php
$conn = mysqli_connect("localhost","root","","taskwork");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
if(empty($_POST['name'])){
    echo "<script>
    alert('Please Enter THe name...');
    window.location.href='Taskcrudinsert.php';
    </script>";
}
elseif(empty($_POST['email'])){
    echo  "<script>
    alert('Please Enter The Email...');
    window.location.href='Taskcrudinsert.php';
    </script>";
}
elseif(empty($_POST['phone'])){
    echo "<script>
    alert('Please Enter The phone...');
    window.location.href='Taskcrudinsert.php';
    </script>";
}
elseif(empty($_POST['message'])){
    echo "<script>
        alert('Please Enter the Message...');
        window.location.href='Taskcrudinsert.php';
        </script>";
}
else{
    $name= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $message= $_POST["message"];

    $sql = "Insert into taskcontectus(name,email,phone,message) values('$name','$email','$phone','$message')";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Data Inserted Successfully...');
        window.location.href='Taskcrudread.php';
        </script>";
    }
}
}
?>