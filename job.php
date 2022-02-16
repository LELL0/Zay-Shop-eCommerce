<!DOCTYPE html>
<html lang="en">

<?php
        require_once ("connection/conn.php");
        session_start();

        ?>

<head>
    <title>Zay Shop eCommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">

<!--
    
balashna ba3d ma 3mlna include lal connection

-->
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
                         <li class="nav-item">
                            <a class="nav-link" href="formpage.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job.php">Work with us</a>
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

                     echo" <a class=button style=\"background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \"href=myAccountInfos.php>My account</a>";

                  }


                  ?>
                  </div>
              </div>
            </div>
        </div>
        
    </nav>
    <!-- Close Header -->
<?php  
 if(!isset($_SESSION['usernamelogin'])){
    
 }
    else{
    echo "<br>";
    echo "<h2 style=\"color: #04aa6d; margin-left:10%;  allign:centre\">Welcome, ".$_SESSION['usernamelogin']."</h2>";
    }


 ?>






            <style>
            *, *:before, *:after {
              -moz-box-sizing: border-box;
              -webkit-box-sizing: border-box;
              box-sizing: border-box;
            }

            body {
              font-family: 'Nunito', sans-serif;
              color: #384047;
            }

            form {

              max-width: 600px;
              width: 90%;
              padding-top: 10px;
              padding-left: 150px ;
              border-radius: 8px;
            }

            h1 {
              margin: 0 0 30px 0;
              
            }

           
            
            input[type="radio"],
            input[type="checkbox"] {
              margin: 0 4px 8px 0;
            }

            select {
              width: 90;
              padding: 6px;
              height: 32px;
              border-radius: 2px;
            }

            button {
              width: 90%;
              padding: 19px 39px 18px 39px;
              color: #FFF;
              background-color: #04aa6d;
              font-size: 18px;
              text-align: center;
              font-style: normal;
              border-radius: 5px;
              width: 100%;
              border: 1px solid #3ac162;
              border-width: 1px 1px 3px;
              box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
              margin-bottom: 10px;
            }

            fieldset {
              width: 90%;
              margin-bottom: 30px;
              border: none;
            }

            legend {
              font-size: 1.4em;
              margin-bottom: 10px;
            }

            label {
              display: block;
              margin-bottom: 8px;
            }

            label.light {
              font-weight: 300;
              display: inline;
            }

           

            @media screen and (min-width: 480px) {

              form {
              max-width: 480px;
              }

            }
            </style>
              <body>
                <br>
              <?php
                if(isset($_GET["success"])) {
                  echo "<h4 style='padding-left:150px;padding-top=30px;padding-bottom=20px; color:#04aa6d;font-weight:bold;font-size:20px;'>Successful registration</h4>";
                }
                
                if(isset($_GET["error"]) && $_GET["error"]==1) {
                  echo "<p style='padding-left:150px;padding-top=30px;padding-bottom=20px; color:red;font-weight:bold;font-size:20px;'>We have already received your request.</p>";
                }
              ?>
                <form action="jobInter.php" enctype="multipart/form-data" method="post">
                
                  <h1>Job Apply</h1>
                  
                  <fieldset>

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name" required>
                    
                    <label for="mail">Email:</label>
                    <input type="email" id="mail" name="user_email" required>
                    
                    <label>Age:</label>
                    <input type="radio" id="under_18" value="under_18" name="user_age" required><label for="under_18" class="light">Under 18</label><br>
                    <input type="radio" id="over_18" value="over_18" name="user_age" required><label for="over_18" class="light">18 or older</label>
                  </fieldset>
                  
                  <fieldset>
                    <label for="bio">Biography:</label>
                    <textarea id="bio" name="user_bio" required></textarea>
                <label for="user_photo">Upload your cv photo:</label>  
                <input type="file" name="user_photo" accept="image/jpeg, image/png" required>
                  </fieldset>
              
                  <fieldset>
                  <label for="job">Job Role:</label>
                  <select id="job" name="user_job" required>
                <option value="" hidden>Select Role</option>
                 
                      <option value="delivery">Delivery</option>
                     <option value="inside_shop">worker</option>
                     <option value="inside_shop">secretary</option>
                 
                  </select>
                  
                    <label>Interests:</label>
                    <input type="checkbox" id="development" value="interest_development" name="user_interest[]"><label class="light" for="development">Accounting</label><br>
                    <input type="checkbox" id="business" value="interest_business" name="user_interest[]"><label class="light" for="business">Business</label>
                  
                  </fieldset>
                  <button type="submit" name="submit">Apply</button>
                </form>
                
              </body>
          </html>
          </html>
