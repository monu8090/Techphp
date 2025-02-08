<?php
$con = mysqli_connect('localhost','root','','portfolio_web');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['uid'];
    $heading = $_POST['heading'];
    $subheading = $_POST['subheading'];
    $discription = $_POST['discription'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $image = $_POST['image'];
    $sql = "Update about set heading='$heading',subheading='$subheading',discription='$discription',
    phone='$phone',email='$email',website='$website' where 
    id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('Record Updated successfully');
            // window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from about where id=$id";
    $single = mysqli_query($con,$sql);
    if(mysqli_num_rows($single)>0){
        $result = mysqli_fetch_assoc($single);
        // $subject = explode(',',$result['subject']);
    }
}else{
    header('Location:.php');
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Bootstrap Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      width: 700px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

  </style>
</head>
<body>

  <div class="d-flex justify-content-center align-items-center vh-100 mt-5">
    <div class="form-container">
      <form action="" method="POST">
        <input type="hidden" value="<?= $result['id'] ?>" name="uid">
        <!-- Heading -->
        <div class="mb-3">
          <label for="heading" class="form-label">Heading</label>
          <input type="text" class="form-control" id="heading" name="heading" value="<?= $result['headig'] ?>" placeholder="Enter heading">
        </div>
        <!-- Subheading -->
        <div class="mb-3">
          <label for="subheading" class="form-label">Subheading</label>
          <input type="text" class="form-control" id="subheading"  value="<?= $result['subheadig'] ?>" name="subheading" placeholder="Enter subheading">
        </div>
        <!-- Description -->
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="discription" name="discription"  value="<?= $result['discription'] ?>" rows="3" placeholder="Enter description"></textarea>
        </div>
        <!-- Phone -->
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone"  value="<?= $result['phone'] ?>" placeholder="Enter phone number">
        </div>
        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email"  value="<?= $result['email'] ?>" placeholder="Enter email address">
        </div>
      <!-- Form Field for Website URL -->
<div class="mb-3">
  <label for="website" class="form-label">Website URL</label>
  <input type="url" class="form-control" id="website" name="website"  value="<?= $result['website'] ?>" placeholder="Enter website URL">
</div>
<!-- File Upload -->
<div class="mb-3">
  <label for="file" class="form-label">Upload File</label>
  <input type="file" class="form-control" id="image" name="image">
  <input type="hidden" value="<?= $result['image']?>" height="50px" width="50px">
</div>
        <!-- Submit Button -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
