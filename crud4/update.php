<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location:login_form.php');
}



$conn = mysqli_connect("localhost","root","","taskwork");
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $sql = "Update crud4 set name='$name',email='$email',password='$password',phone='$phone',message='$message' where id=$id";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Record Update Successfully...');
        window.location.href='read.php'
        </script>";
    }
}

if(isset($_GET["id"])){
    $id = $_GET['id'];
    $sql = "Select * from crud4 where id=$id";
    $single = mysqli_query($conn,$sql);
    if(mysqli_num_rows($single)>0){
        $result = mysqli_fetch_assoc($single);
       
    }

}
else{
    header("Location:read.php");
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }
    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
    .form-group textarea {
      resize: vertical;
      height: 80px;
    }
    .form-group input[type="file"] {
      padding: 3px;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Update Form</h2>
    
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $result['id']?>" name="uid">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= $result['name']?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $result['email']?>">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?= $result['password']?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" value="<?= $result['password']?>">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message"><?=$result['message']?></textarea>
      </div>
      <div class="form-group">
        <label for="file">Upload File</label>
        <input type="file" id="image" name="image">
        <input type="hidden" value="<?= $result['image']?>" name="oldimage">
        <input type="hidden" value="<?= $result['id']?>" name="id">
      </div>
      <div class="form-group">
        <button type="submit">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
