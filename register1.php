

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
<?php 
session_start();
require_once("connection/conn.php");
$userid=$_SESSION['loggedInUserId'];
$result = mysqli_query($con, "SELECT * from users Where UserID= $userid");
$row = mysqli_fetch_array($result);


?>
    <div class="wrapper">
        <h2 class="title">Register</h2>
        <form action="registerinter.php" method="post" class="form">
            <div class="input-field">
                <label for="name" class="input-label">Full Name</label>
                <input type="name" name="username" id="username" class="input" placeholder="Enter your full name"  value="<?php echo $row["UserName"];?>" required>
            </div>
            <div class="input-field">
                <label for="Phone Number" class="input-label">Phone Number</label>
                <input type="tel" name="phoneNumber" id="phoneNumber" class="input" placeholder="Enter your Phone Number" value="<?php echo $row["Phone"];?>" required>
            </div>
            <div class="input-field">
                <label for="zipCod" class="input-label">Zip Code</label>
                <input type="zipCode" name="zipCode" id="zipCode" class="input" placeholder="Enter your Zip Code" value="<?php echo $row["areaId"];?>"required>
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" value="<?php echo $row["Email"];?>"readonly>
            </div>
            <div class="input-field">
                <label for="password" class="input-label"> old Password</label>
                <input type="password" name="Opassword" id="password" class="input" placeholder="Enter your old password" required>
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
            <button class="btn" name="sub">Register</button>
           <?php 

           if(isset($_GET["error"])) {
                if($_GET["error"] == 1){
                    echo "<p style='color: red'>Old Password Incorrect!! Enter the right one</p>" ;

                }elseif($_GET["error"] == 2){
                    echo "<p style='color: red'>Passwords do not match</p>" ;

                }
                elseif($_GET["error"] == 3){
                    echo "<p style='color: red'>Password need to contain at least a letter a number and longer than 4 character</p>" ;

                }
                elseif($_GET["error"] == 4){
                    echo "<p style='color: red'>Invalid Phone Number</p>" ;

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