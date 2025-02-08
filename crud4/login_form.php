<?php
$conn = mysqli_connect("localhost", "root", "", "taskwork");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        echo "<script>
        alert('Name Field Required....');
        </script>";
    } elseif (empty($_POST["email"])) {
        echo "<script>
        alert('Email Field Required...');
        </script>";
    } elseif (empty($_POST["password"])) {
        echo "<script>
        alert('Password Field is Required...');
        </script>";
    } elseif (empty($_POST["phone"])) {
        echo "<script>
        alert('Phone number is required...');
        </script>";
    } elseif (empty($_POST["message"])) {
        echo "<script>
        alert('Message is required...');
        </script>";
    } elseif (empty($_FILES["image"]["name"])) {
        echo "<script>
        alert('File Upload is required...');
        </script>";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
       
        $filename = time() . $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name']; // Corrected key
        move_uploaded_file($tmpname, "upload/$filename");

        $sql = "INSERT INTO crud4 (name, email, password, phone, message, image) VALUES ('$name', '$email', '$password', '$phone', '$message', '$filename')"; // Removed extra comma
        if (mysqli_query($conn, $sql)) {
            echo '<script>
            alert("Successfully Data Inserted....");
            window.location.href="login_form.php";
            </script>';
        } else {
            echo '<script>
            alert("Error inserting data: ' . mysqli_error($conn) . '");
            </script>';
        }
    }
}
?>
