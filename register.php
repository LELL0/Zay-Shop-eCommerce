<?php
if(isset($_POST["submit"])){

require_once("connection/conn.php");

$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$phoneNumber = trim($_POST["phoneNumber"]);
$zipCode = trim($_POST["zipCode"]);
$password = $_POST["password"];
$cpassword =  $_POST["cpassword"];

    if (strlen($username)<5) {
        header("Location:register.php?error=8");
 
    }elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE email='$email'")) >0){
        header("Location:register.php?error=1");
    
    } elseif (strlen($phoneNumber) <8 || strlen($phoneNumber) > 14 || !(is_numeric($phoneNumber))) {
        header("Location:register.php?error=4");
     
    }elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE phone='$phoneNumber'"))){
        header("Location:register.php?error=5");
       
    } elseif(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
        header("Location:register.php?error=6");
 
     } elseif(strlen($zipCode)<0){
        header("Location:register.php?error=7");
           
     }elseif (strlen($password) < 4 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) {
            header("Location:register.php?error=3");
                
    }elseif (!($password === $cpassword)){
        header("Location:register.php?error=2");
    
    }


    else{
        $md5pass= md5($password);
        $sql = "INSERT INTO users(username,phone,email,areaId,type,password) VALUES('$username','$phoneNumber','$email','$zipCode',1,'$md5pass') ";
    
        $result = mysqli_query($con,$sql);
        if($result){
            header("Location:login.php");       
        }else{
            header("Location:register.php?error=10");
        
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
    <link rel="stylesheet" href="assets/css/estyle.css">
    <title>Create Login Limits PHP Script</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Register</h2>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="name" class="input-label">Full Name</label>
                <input type="name" name="username" id="username" class="input" placeholder="Enter your full name" required>
            </div>
            <div class="input-field">
                <label for="Phone Number" class="input-label">Phone Number</label>
                <input type="tel" name="phoneNumber" id="phoneNumber" class="input" placeholder="Enter your Phone Number" required>
            </div>
            <div class="input-field">
                <label for="zipCod" class="input-label">Zip Code</label>
                <input type="zipCode" name="zipCode" id="zipCode" class="input" placeholder="Enter your Zip Code" required>
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="input" placeholder="Enter your confirm password" required>
            </div>
            <div class="input-field">
            </div>
            <button class="btn" name="submit">Register</button>

           <?php 

           if(isset($_GET["error"])) {
                if($_GET["error"] == 1){
                    echo "<p style='color: red'>email is already registered</p>" ;

                }elseif($_GET["error"] == 2){
                    echo "<p style='color: red'>Passwords do not match</p>" ;

                }
                elseif($_GET["error"] == 3){
                    echo "<p style='color: red'>Password need to contain at least a letter a number and longer than 4 character</p>" ;

                }
                elseif($_GET["error"] == 4){
                    echo "<p style='color: red'>Invalid Phone Number</p>" ;

                }
                elseif($_GET["error"] == 5){
                    echo "<p style='color: red'>Your Phone number is already linked to an Account</p>" ;

                }
                elseif($_GET["error"] == 6){
                    echo "<p style='color: red'>Enter a Valid Email</p>" ;

                }
                elseif($_GET["error"] == 7){
                    echo "<p style='color: red'>Enter a Valid Zip Code</p>" ;

                }
                elseif($_GET["error"] == 8){
                    echo "<p style='color: red'>Your Username cannot be less than 5 characters</p>" ;

                }
                elseif($_GET["error"] == 10){
                    echo "<p style='color: red'>Error Registering your account</p>" ;

                }
            }
			  
            ?>

            <p>You have already an account! <a href="login.php">Login</a>.</p>
        </form>
    </div>
</body>
</html>