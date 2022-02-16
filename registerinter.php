<?php
session_start();
require_once("connection/conn.php");
if(isset($_POST["sub"])){
  

$userid=$_SESSION['loggedInUserId'];
$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$pass= $_POST["Opassword"];
$phoneNumber = trim($_POST["phoneNumber"]);
$zipCode = trim($_POST["zipCode"]);
$password = $_POST["password"];
$cpassword =  $_POST["cpassword"];
$sql = "SELECT * FROM users WHERE UserID='$userid'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$md6pass=md5($pass);



    if (strlen($username)<5) {
        header("Location:register1.php?error=8");
 
    }elseif ($row["Password"] != $md6pass) {
        header("Location:register1.php?error=1");
     
    }
     elseif (strlen($phoneNumber) <8 || strlen($phoneNumber) > 14 || !(is_numeric($phoneNumber))) {
        header("Location:register1.php?error=4");
     
    }  elseif(strlen($zipCode)<0){
        header("Location:register1.php?error=7");
           
     }elseif (strlen($password) < 4 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password)) {
            header("Location:register1.php?error=3");
                
    }elseif (!($password === $cpassword)){
        header("Location:register1.php?error=2");
    
    }


    else{
        $md5pass= md5($password);
        $result=mysqli_query($con,"UPDATE users SET UserName = '$username', Email = '$email', Password = '$md5pass' , Phone = '$phoneNumber' , type='1' , Status='1' , areaId='$zipCode' WHERE UserID = '$userid'");
      
      
            header("Location:login.php");       
        }
}

        else{
            header("Location:register1.php?error=10");
        
        }
    



?>

