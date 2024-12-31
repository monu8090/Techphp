<?php
$conn = mysqli_connect("localhost","root","","taskwork");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Name must be Required...');
        </script>";
    }
    elseif(empty($_POST["email"])){
        echo "<script>
        alert('Email The Fill...');
        </script>";
    }
    elseif(empty($_POST["phone"])){
        echo "<script>
        alert('phone must be fill...');
        </script>";
    }
    elseif(empty($_POST["message"])){
        echo "<script>
        alert('phone must be fill...');
        </script>";
    }
    else{
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "Update taskcontectus set name ='$name', email='$email',phone ='$phone',message ='$message' where id=$id";
        if(mysqli_query($conn,$sql)){
            echo "<script>
            
            alert('Your Acoount Updated...');
            window.location.href='Taskcrudread.php';
            
            </script>";
        }
    }
}
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "Select * from taskcontectus where id=$id";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_assoc($result);
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css">
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

.contact-container {
  width: 100%;
  max-width: 500px;
  background: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact-container h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

.contact-form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #555;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #007BFF;
  outline: none;
}

.contact-form button {
  width: 100%;
  padding: 10px;
  background: #007BFF;
  color: #fff;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.contact-form button:hover {
  background: #0056b3;
}

  </style>
</head>
<body>
  <div class="contact-container">
    <h1>Update Page</h1>
    <form action="" method="post" class="contact-form">
    <input type="hidden" value="<?= $data['id']?>" name="uid">
      <label for="name">Name</label>
      <input type="text"  value="<?= $data['name']?>" id="name" name="name" placeholder="Your Name">
      
      <label for="email">Email</label>
      <input type="email"  value="<?= $data['email']?>" id="email" name="email" placeholder="Your Email">
      
      <label for="phone">Phone</label>
      <input type="text"  value="<?= $data['phone']?>" id="phone" name="phone" placeholder="phone">
      
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Your Message" rows="6"><?= $data['message']?></textarea>
      
      <button type="submit">Update Data</button>
    </form>
  </div>
</body>
</html>

<?php
}
} 
else{
    header('Location:Taskcrudread.php');
}
?>