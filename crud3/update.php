<?php
$conn = mysqli_connect("Localhost", "root", "", "techphp25");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['uid'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $subject = implode(',', $_POST['subject']);
    $descri = $_POST['descri'];

    $sql = "UPDATE all_field SET username='$username', dob='$dob', gender='$gender', country='$country', 
            subject='$subject', descri='$descri' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Record Updated Successfully...');
        window.location.href='read.php';
        </script>";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM all_field WHERE id=$id";
    $single = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($single) > 0) {
        $result = mysqli_fetch_assoc($single);
        $subject = explode(',', $result['subject']);
    } else {
        header('Location: read.php');
        exit;
    }
} else {
    header('Location: read.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Form</title>
  <style>
    /* CSS as per your original code */
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
    <h2>Update User</h2>
    <form action="#" method="post">
      <div class="form-group">
        <input type="hidden" value="<?= $result['id'] ?>" name="uid">
        <label for="username">Username</label>
        <input type="text" value="<?= $result['username'] ?>" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" value="<?= $result['dob'] ?>" id="dob" name="dob" required>
      </div>
      <div class="form-group">
        <label>Gender</label>
        <div class="gender-group">
          <label><input type="radio" name="gender" <?= $result['gender'] == 'Male' ? 'checked' : '' ?> value="Male" required> Male</label>
          <label><input type="radio" name="gender" <?= $result['gender'] == 'Female' ? 'checked' : '' ?> value="Female" required> Female</label>
          <label><input type="radio" name="gender" <?= $result['gender'] == 'Other' ? 'checked' : '' ?> value="Other" required> Other</label>
        </div>
      </div>
      <div class="form-group">
        <label for="country">Country</label>
        <select id="country" name="country" required>
          <option value="">Select Country</option>
          <option <?= $result['country'] == 'USA' ? 'selected' : '' ?> value="USA">USA</option>
          <option <?= $result['country'] == 'Canada' ? 'selected' : '' ?> value="Canada">Canada</option>
          <option <?= $result['country'] == 'UK' ? 'selected' : '' ?> value="UK">UK</option>
          <option <?= $result['country'] == 'India' ? 'selected' : '' ?> value="India">India</option>
          <option <?= $result['country'] == 'Australia' ? 'selected' : '' ?> value="Australia">Australia</option>
        </select>
      </div>
      <div class="form-group">
        <label>Subjects</label>
        <div class="checkbox-group">
          <label><input type="checkbox" <?= in_array('Math', $subject) ? 'checked' : '' ?> name="subject[]" value="Math"> Math</label>
          <label><input type="checkbox" <?= in_array('Science', $subject) ? 'checked' : '' ?> name="subject[]" value="Science"> Science</label>
          <label><input type="checkbox" <?= in_array('History', $subject) ? 'checked' : '' ?> name="subject[]" value="History"> History</label>
          <label><input type="checkbox" <?= in_array('Art', $subject) ? 'checked' : '' ?> name="subject[]" value="Art"> Art</label>
        </div>
      </div>
      <div class="form-group">
        <label for="descri">Description</label>
        <textarea id="descri" name="descri" rows="4" placeholder="Write about yourself..."><?= $result['descri']?></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Update Account</button>
      </div>
    </form>
  </div>
</body>
</html>
