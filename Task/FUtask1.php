<?php
$conn = mysqli_connect("localhost","root","","taskwork");
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo'<script>
        alert("Please Enter The Name....");
        </script>';
    }
    elseif(empty($_POST['email'])){
        echo'<script>
        alert("Please enter the email...");
        </script>';
    }
    elseif(empty($_POST['phone'])){
        echo '<script>
        alert("Please fill the phone number...");
        </script>';
    }
    elseif(empty($_POST['gender'])){
        echo '<script>
        alert("Please Select the gender");
        </script>';
    }
    elseif(empty($_POST['country'])){
        echo '<script>
        alert("Please Select the Country...");
        </script>';
    }
    elseif(empty($_POST['message'])){
        echo '<script>
        alert("Please Select The Message,");
        </script>';
    }
    elseif(empty($_FILES['image']['name'])){
        echo '<script>
        alert("Image File Upload please...");
        </script>';
    }
    else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $message = $_POST['message'];
        $filename = time().$_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,to:'upload/$filename');
        $sql = "insert into futask1(name,email,phone,gender,country,message,image) values
        ('$name','$email','$phone','$gender','$country','$message','$filename')";
        if(mysqli_query($conn,$sql)){
            echo "<script>
                   alert('Successfully Data Inserted...');
                   window.location.href='FUread1.php';
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
    <title>Stylish Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('footer.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .form-container input, .form-container select, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contact Form</h2>
        
        <form action="#" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="">Select your country</option>
                <option value="usa">USA</option>
                <option value="canada">Canada</option>
                <option value="uk">UK</option>
                <option value="australia">Australia</option>
                <option value="india">India</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Write your message here..."></textarea>

            <label for="file">Upload File:</label>
            <input type="file" id="image" name="image" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
