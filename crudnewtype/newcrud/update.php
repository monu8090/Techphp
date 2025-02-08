<?php
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['uid'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $subject = implode(',',$_POST['subject']);
    $description = $_POST['description'];
    $sql = "Update all_field set username='$username',dob='$dob',gender='$gender',
    country='$country',subject='$subject',description='$description' where 
    id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('Record Updated successfully');
            window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from all_field where id=$id";
    $single = mysqli_query($con,$sql);
    if(mysqli_num_rows($single)>0){
        $result = mysqli_fetch_assoc($single);
        $subject = explode(',',$result['subject']);
    }
}else{
    header('Location:read.php');
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
                    <input type="hidden" value="<?= $result['id']?>" name="uid">
                    <div class="input-box">
                        <label for="name" class="reg-label">Username:</label> 
                        <input type="text" name="username" value="<?= $result['username']?>"  class="reg-input">
                    </div>
                    <div class="input-box">    
                        <label for="name" class="reg-label">DOB</label>
                        <input type="date" name="dob" value="<?= $result['dob']?>" class="reg-input">    
                    </div>
                </div>  
                <div class="input-row">
                    <div class="input-box" style="display:inline"> 
                        <label for="name" class="reg-label">Gender</label>
                        <input type="radio" name="gender" <?= $result['gender']=='male'?'checked':''?> value="male" class="reg-input"> Male
                        <input type="radio" name="gender" <?= $result['gender']=='female'?'checked':''?> value="female" class="reg-input"> Female
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Country</label>
                        <select name="country" id="" class="reg-input">
                            <option value="">--Select Country--</option>
                            <option <?= $result['country']=='india'?'selected':''?> value="india">India</option>
                            <option <?= $result['country']=='china'?'selected':''?> value="china">China</option>
                            <option <?= $result['country']=='pakistan'?'selected':''?> value="pakistan">Pakistan</option>
                        </select>    
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-box" style="display:inline"> 
                        <label for="name" class="reg-label">Subject</label>
                        <input type="checkbox" <?= in_array('hindi',$subject)?'checked':''?> name="subject[]" value="hindi" class="reg-input"> Hindi
                        <input type="checkbox" <?= in_array('english',$subject)?'checked':''?> name="subject[]" value="english" class="reg-input"> English
                        <input type="checkbox" <?= in_array('urdu',$subject)?'checked':''?> name="subject[]" value="urdu" class="reg-input"> Urdu
                        <input type="checkbox" <?= in_array('sanskrit',$subject)?'checked':''?> name="subject[]" value="sanskrit" class="reg-input"> Sanskrit
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Description</label> 
                        <textarea name="description" id="" class="reg-input"><?= $result['description']?></textarea>   
                    </div>
                </div>
                <div class="button">
                    <button type="submit" class="reg-button">UPDATE ACCOUNT</button>
                </div> 
                <div class="reg-link">
                 <h5 class="reg-h5">Already Have an Account? <a href="#">Login</a></h5>
                </div> 
            </form>  
    </div>
</body>
</html>