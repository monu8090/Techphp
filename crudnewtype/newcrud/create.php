<?php
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['username'])){
        echo "<script>
            alert('Username field required');
        </script>";
    }elseif(empty($_POST['dob'])){
        echo "<script>
            alert('Date of birth field required');
        </script>";
    }elseif(empty($_POST['gender'])){
        echo "<script>
            alert('Gender field required');
        </script>";
    }elseif(empty($_POST['country'])){
        echo "<script>
            alert('Country field required');
        </script>";
    }elseif(empty($_POST['subject'])){
        echo "<script>
            alert('Subject field required');
        </script>";
    }elseif(empty($_POST['description'])){
        echo "<script>
            alert('Description field required');
        </script>";
    }else{
        $username = $_POST['username'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $subject = implode(',',$_POST['subject']);
        $desc = $_POST['description'];
        $sql = "insert into all_field(username,dob,gender,country,subject,description) 
        values('$username','$dob','$gender','$country','$subject','$desc')";
        if(mysqli_query($con,$sql)){
            echo "<script>
                alert('Data inserted successfully');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;

        } 
        .main-container{
            min-height: 400px;
            width: 100%;
            max-width: 800px;
            background-color: #eeeeee;  
            border-radius: 20px; 
            align-items: center; 
            margin-top: 70px;
        }
        .reg-heading{
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 800;
            line-height: 24px;
            font-weight: 500;
            letter-spacing: 3px;
            background-color: #002233;
            padding-top:20px;
            padding-bottom: 20px;
            color: #ffffff;
            border-radius: 10px 10px 0px 0px;
        }
        .main-container:hover{
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .input-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 5px;
            margin-right:30px;  
        }
        .input-box{
            display: flex;
            flex-direction: column;
            width: 48%;
            margin-bottom: 5px;
        }
        .reg-label{
            font-size: 18px;
            font-weight: 500;
            padding-left: 20px;  
            color: #002233;
        }
        .reg-input{
            box-sizing: border-box;
            padding: 10px 5px;
            margin-left: 20px;
            margin-bottom: 5px;  
            font-size: 17px;
            outline: none;
            font-weight: 500;
            border-top: none;
            border-left: none;
            border-right: none;
            background: none;
        }
        .reg-input:hover{
            transform: translate(3px, 1px);
        }
        .button{
            text-align: center;
            margin-top: 40px; 
            margin-bottom: 40px;   
        }
        .reg-button{
            width: 30%;
            padding: 13px 20px;
            border-radius: 20px;
            font-weight: 400;
            font-size: 16px;
            background-color: #002233;
            color: #ffffff;
            border: none;
            letter-spacing: 2px;
        }
        .reg-button:hover{
            cursor: pointer;
            background-color: #45a049;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        .reg-link{
            background: #002233;
            padding-bottom: 20px;
            border-radius: 0px 0px 10px 10px;
        }
        .reg-h5{
            text-align: center;
            margin-top: 30px;
            font-size: 17px;
            font-weight: 400;
            color: #ffffff;
            letter-spacing: 2px;
            padding-top: 20px;
        }
        .reg-link a{
            color: #ffffff;
            letter-spacing: 2px;
        }
        @media (max-width: 600px) {
            .main-container{
                width: 90%;
            }
            .input-row {
                width: 90%;
            }
            .input-box {
                width: 100%;
                margin-left: 10px;
            }
            .reg-input {
                margin-left: 10px;
            }
            .reg-button {
                width: 98%;
                margin-left: 0px;
                margin-right: 0px;
            }
        }
    </style>
</head>
<body>
   <div class="main-container">
            <form action="" method="post">
                <h2 class="reg-heading"> ALL TYPE INPUT FIELD</h2>
                <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">Username:</label> 
                        <input type="text" name="username"  class="reg-input">
                    </div>
                    <div class="input-box">    
                        <label for="name" class="reg-label">DOB</label>
                        <input type="date" name="dob" class="reg-input">    
                    </div>
                </div>  
                <div class="input-row">
                    <div class="input-box" style="display:inline"> 
                        <label for="name" class="reg-label">Gender</label>
                        <input type="radio" name="gender" value="male" class="reg-input"> Male
                        <input type="radio" name="gender" value="female" class="reg-input"> Female
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Country</label>
                        <select name="country" id="" class="reg-input">
                            <option value="">--Select Country--</option>
                            <option value="india">India</option>
                            <option value="china">China</option>
                            <option value="pakistan">Pakistan</option>
                        </select>    
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-box" style="display:inline"> 
                        <label for="name" class="reg-label">Subject</label>
                        <input type="checkbox" name="subject[]" value="hindi" class="reg-input"> Hindi
                        <input type="checkbox" name="subject[]" value="english" class="reg-input"> English
                        <input type="checkbox" name="subject[]" value="urdu" class="reg-input"> Urdu
                        <input type="checkbox" name="subject[]" value="sanskrit" class="reg-input"> Sanskrit
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Description</label> 
                        <textarea name="description" id="" class="reg-input"></textarea>   
                    </div>
                </div>
                <div class="button">
                    <button type="submit" class="reg-button">CREATE ACCOUNT</button>
                </div> 
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have an Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
    </div>
</body>
</html>