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
elseif(empty($_POST['gender'])){
    echo  "<script>
    alert('Please Enter The Email...');
    window.location.href='Taskcrudinsert.php';
    </script>";
}
else{
    $name= $_POST["name"];
    $email= $_POST["email"];
    $genderData= $_POST["gender"];
    $gender = implode(",", $genderData);
    

    $sql = "Insert into selectbox(name,email,gender) values('$name','$email','$gender')";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Data Inserted Successfully...');
        window.location.href='TaskCheckboxInsert.php';
        </script>";
    }
}
}
?>