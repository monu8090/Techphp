<?php
$conn = mysqli_connect("localhost","root","","techphp_crud");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('First name must be required...');
        </script>";
    }
    elseif(empty($_POST['lastname'])){
        echo "<script>
        alert('First name must be required...');
        </script>";
    }
    elseif(empty($_POST['email'])){
        echo "<script>
        alert('First name must be required...');
        </script>";
    }
    else{
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql = "Update crud_insert set name= '$name',lastname='$lastname',email= '$email' where id=$id";
        if(mysqli_query($conn,$sql)){
            echo "<script> 
            alert('Your Account UPdated...');
            window.location.href='Read.php';
            </script>";
        }
    }
}
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "Select * from crud_insert where id=$id";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_assoc($result);
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>UPDATE Form</h2>
        <form method="post">
            <div class="form-group" >
                <input type="hidden" value="<?= $data['id']?>" name="uid">
                <label for="name">Name</label>
                <input type="text" value="<?= $data['name']?>" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text"  value="<?= $data['lastname']?>"  id="lastname" name="lastname" placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  value="<?= $data['email']?>" id="email"  name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <button type="submit">UPDATE FORM</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
}
}else{
    header('Location:Read.php');
}
?>
