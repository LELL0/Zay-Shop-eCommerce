<!DOCTYPE html>
<html lang="en">
	<?php
require_once ("connection/conn.php");
 session_start();
 
 ?>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"></script>
<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php" style="margin-right: 5% ;">
                Zay     
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

          <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
              <div class="navbar align-self-center d-flex">
                    
                  
                     
                  <div style="padding-left: 30px; padding-right: 5px; padding-bottom:5px; padding-top: 5px ">
                    <?php
                    if(!isset($_SESSION['usernamelogin'])){
                  echo"  <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=login.php>Login</a>";
                  echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=register.php>Sign Up</a>";
                  echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=admin/login.php>Login as Admin</a>";
                  }
                  else{
                     echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=createads.php>Add advertisement</a>";
                      echo" <a class=button style=\"background-color: red; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=logout.php>Log out from  ".$_SESSION['usernamelogin']."</a>";
                      
                  }
                 
                  ?>
                  </div>
              </div>
            </div>
        </div>
        
    </nav>
    <!-- Close Header -->

    <div>


<?php

if(isset($_GET["status"])){
    if($_GET["status"] == 1){
        echo "<p style='text-align:center;color:red;font-weight:bold;font-size:20px;'>ERROR!!retry another id or replace the uploded one!!!</p>";
    }
 else if($_GET["status"] == 2){
    echo "<p style='text-align:center;color:red;font-weight:bold;font-size:20px;'>ERROR!! Try Again</p>";
}else if($_GET["status"] == 3){
    echo "<p style='text-align:center;color:green;font-weight:bold;font-size:20px;'>Editing done successfully!!</p>";
}

         }
       
?>
</div>
<?php



	$userid=$_SESSION['loggedInUserId'];

	$sql = "SELECT * FROM advertisments WHERE userID=$userid";
    $result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) == false)
{
    echo "No results found";
}
else
{
    echo "         <div id='top' style=color:red ; class='col-md-4 col-sm-6 ' > 
    WHEN CLICKING ON DELETE YOUR AD WILL BE IMMEDIATELY DELETED!!
    <br>
    
    Welcome!!Find  here your ads</div>";
    while ($row = mysqli_fetch_array($result))
    {

        if ($row['status'] == 1  )
        {
            echo "         
			<div id='left' class='col-md-4 col-sm-6 '>
			<div class='card ' > 
			<img class='' src='assets/img/{$row['Image']}' class='card-img-top' alt='...'>
			<span class='float-left'> $ {$row['Price']}</span>
				<div class='card-body'>
				<h5 class='card-title'>{$row['Title']}</h5>
				<p class='card-text'>{$row['Details']}</p>
				<a value=edit href='editad.php?ADSID={$row['AdsID']}' class='btn btn-primary '>edit</a>";
           
                echo "<a href='deleteads.php?ADSID={$row['AdsID']}' class='btn btn-danger ml-2 ' >delete</a>";
            
           
                

           
            echo " </div> </div></div>";
		}
	}
}
function isLogged(){
    if(isset($_SESSION['LOGGEDIN'])){
        //Logged in user
        return 1 ;
    }else if (isset($_SESSION['admin'])) {
        //Logged in  by admin
        return 2 ;
    }
    else{
        //NOT Logged in 
        return 3 ;
    }
}
?>
<style>
#left{
	position:relative;
	width:30%;
	float:right;
   margin-right:30%;
  margin-top:4%;

	
	
}
#top{
    position:relative;
	width:30%;
    margin-left:30%;
   text-align:center;
   margin-top:4%;

}
#right{
    margin-top:4%;
    
}

</style>
<?php
