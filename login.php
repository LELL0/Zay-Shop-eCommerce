<?php
session_start();
if(isset($_POST["login"])){

    require_once("connection/conn.php");

    $email=filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password=md5($_POST['pwd']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);

    if($count === 1 ){

        $row = mysqli_fetch_assoc($result);

        $_SESSION["SESSION_EMAIL"] = $email;

        $_SESSION['usernamelogin'] =$row['UserName'];
        $_SESSION['loggedInUserId'] = $row['UserID'];

        header("Location:index.php");
    }else{
        header("Location:login.php?error=1");
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
 
    <title>OLX</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Login</h2>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="pwd" id="pwd" class="input" placeholder="Enter your password" required>
            </div>
            <button class="btn" name="login">Login</button>

            <?php 

           if(isset($_GET["error"])) {
                if($_GET["error"] == 1){
                    echo "<p style='color: red'>Incorrect Login Details</p>" ;
                }
            }
          ?>
            <p>Create Account! <a href="register.php">Register</a>.</p>
        </form>
    </div>
</body>
</html>