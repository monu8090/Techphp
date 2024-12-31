<?php
$conn = mysqli_connect("localhost","root","","techphp25");
if($_SERVER["REQUEST_METHOD"]=='POST'){
if(empty($_POST['username'])){
    echo "<script>
    alert('Fill The username...');
    </script>";
}
elseif(empty($_POST['dob'])){
    echo "<script>
    alert('Fill The Date Of Birth....');
    </script>";
}
elseif(empty($_POST['gender'])){
echo "<script>
alert ('Please select the gender Option...');
</script>";
}
elseif(empty($_POST['country'])){
    echo "<script>
    alert('Please select the country');
    </script>";
}
elseif(empty($_POST['subject'])){
    echo "<script>
    alert('Please select the subject');
    </script>";
}
elseif(empty($_POST['descri'])){
    echo "<script>
    alert('Please select the Description...');
    </script>";
}
else{
    $username=$_POST["username"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $country=$_POST["country"];
    $subject= implode(",",array: $_POST["subject"]);
    $descri=$_POST["descri"];
    // $dob=$_POST["dob"];

    $sql = "Insert into all_field(username,dob,gender,country,subject,descri) values('$username','$dob','$gender','$country',
    '$subject','$descri')";
    if(mysqli_query($conn,$sql)){
        echo "<script>
        alert('Data Inserted sucessfully...');
        window.location.href='read.php';
        </script>";
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 400px;
      width: 100%;
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
      font-weight: bold;
    }
    .form-group input, 
    .form-group select, 
    .form-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
    .form-group .checkbox-group, 
    .form-group .gender-group {
      display: flex;
      gap: 10px;
    }
    .form-group input[type="checkbox"], 
    .form-group input[type="radio"] {
      width: auto;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 4px;
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
    <h2>Create User</h2>
    <form action="#" method="post">
      <div class="form-group">
       
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label>Gender</label>
        <div class="gender-group">
          <label><input type="radio" name="gender" value="Male" required> Male</label>
          <label><input type="radio" name="gender" value="Female" required> Female</label>
          <label><input type="radio" name="gender" value="Other" required> Other</label>
        </div>
      </div>
      <div class="form-group">
        <label for="country">Country</label>
        <select id="country" name="country" required>
          <option value="">Select Country</option>
          <option value="USA">USA</option>
          <option value="Canada">Canada</option>
          <option value="UK">UK</option>
          <option value="India">India</option>
          <option value="Australia">Australia</option>
        </select>
      </div>
      <div class="form-group">
        <label>Subjects</label>
        <div class="checkbox-group">
          <label><input type="checkbox" name="subject[]" value="Math"> Math</label>
          <label><input type="checkbox" name="subject[]" value="Science"> Science</label>
          <label><input type="checkbox" name="subject[]" value="History"> History</label>
          <label><input type="checkbox" name="subject[]" value="Art"> Art</label>
        </div>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="descri" name="descri" rows="4" placeholder="Write about yourself..."></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
