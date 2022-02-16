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

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
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
                   

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                                <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). 
                                    This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website. 
                                    Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories</h1>
            </div>
        </div>
        

            

<!--//searchPPPPPPPPPPPPPPPPPPPPHHHHHHHHHHHHHHHHHHHHHHHHHHHPPPPPPPPPPPPPPPPPPPPPPPPPPP//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


        <div class="container ">
            <div class="control d-flex  justify-content-around">
                <div class="search text-center">
                <form method="get" action="index.php" class=" ">
                                <input type="button" onclick="window.location.href='search.php'" class="btn clicksearch" value="Advanced search">

                                <select class="select " name="Maincategory">
                                <option value='' hidden="on">CategoryName</option>
                                    <?php                                        
                                        $result = mysqli_query($con, "SELECT CategoryID , CategoryName FROM categories");
                                        While($row = mysqli_fetch_array($result)){
                                            echo "<option value='" . $row["CategoryID"] . "'>" . $row["CategoryName"] . "</option>"; 
                                        }         
                                    
                                    ?>


                                </select><input type="submit" class="btn clicksearch" value="search">
                    </form>
                </div>
            </div>
        </div>
        <div class='container'>
        <div class="btn-group btn-group-justified col-sm-12 m-2">
            <a href="index.php?pricedp" class="btn btnselect ">Lowest price</a>
            <a href="index.php?pricepd" class="btn btnselect ">Highest price</a>
            <a href="index.php?New" class="btn btnselect ">New</a>
          </div>
        </div>
        <section class="ads">
            <div class="container">
                <div class="row ">
                <?php 

                            //Get DB products and display them
                            if (isset($_GET['pricedp'])){
                                $result = mysqli_query($con, "SELECT * FROM `advertisments` ORDER BY `advertisments`.`Price` ASC  ");
                            }else if (isset($_GET['pricepd'])){
                                $result = mysqli_query($con, "SELECT * FROM `advertisments` ORDER BY `advertisments`.`Price` DESC ");
                            }else if (isset($_GET['New'])){
                            $result = mysqli_query($con, "SELECT * FROM `advertisments` ORDER BY `advertisments`.`Date` DESC     ");
                            }else if (isset($_GET['Maincategory'] ) AND $_GET['Maincategory'] !=0){
                                $categoryID =$_GET['Maincategory'];
                                $result = mysqli_query($con, "SELECT * FROM advertisments , categories where categories.CategoryID= $categoryID and advertisments.CategoryID = categories.CategoryID ");
                            }else {
                                $result = mysqli_query($con, "SELECT * FROM `advertisments` ORDER BY `advertisments`.`Details` ASC   ");

                            }
                            if(mysqli_num_rows($result)>0){
                                //Show them

                                while($row = mysqli_fetch_assoc($result)){
                                    if($row['status'] == 1 || isLogged() == 2 ) {
                                    echo "<div class='col-md-4 col-sm-6 '>
                                    <div class='card ' > 
                                    <img class='' src='assets/img/{$row['Image']}' class='card-img-top' alt='...'>
                                    <span class='float-left'> $ {$row['Price']}</span>
                                        <div class='card-body'>
                                        <h5 class='card-title'>{$row['Title']}</h5>
                                        <p class='card-text'>{$row['Details']}</p>
                                        <a href='pageads.php?ADS-ID={$row['AdsID']}' class='btn btn-primary '>More Details</a>"; 
                                        if ($row['status'] == 1 &&(isLogged() == 2) ){
                                            echo "<a href='adsshoworhide.php?ADS-ID={$row['AdsID']}' class='btn btn-danger ml-2 ' >Hide</a>";
                                        }else if  ($row['status'] == 0 &&(isLogged() == 2) ) {
                                            echo "<a href='adsshoworhide.php?ADS-ID={$row['AdsID']}' class='btn btn-primary ml-2  ' >Show</a>";

                                        }
                                        echo" </div> </div></div>";
                                    }
                                }
                                }else{
                                outputMessage("No products found in our catalog",'warning');
                            }



                                    function isLogged(){
                                    if(isset($_SESSION['usernamelogin'])){
                                        //Logged in user
                                        return 1 ;
                                    }else if (isset($_SESSION['admin_id'])) {
                                        //Logged in  by admin
                                        return 2 ;
                                    }
                                    else{
                                        //NOT Logged in 
                                        return 3 ;
                                    }
                                }


                                function outputMessage($message='',$type='success'){
                                    ECHO "<div class='alert alert-{$type}'>{$message}</div>";
                                }
                        ?>


                </div>
            </div>

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->



        
    </section>
    <!-- End Categories -->


    <!-- Start Featured Product -->

       <section class="ads">
            <div class="container">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Today's Picks</h1>
                </div>
            </div>
            <div class="row">
                  <?php 

                            //Get DB products and display them
                            
                                $res1 = mysqli_query($con, "SELECT * FROM `advertisments` where Date in (SELECT CURDATE()) ORDER BY `advertisments`.`Price`");

                            
                            if(mysqli_num_rows($res1)>0){
                                //Show them

                                while($row = mysqli_fetch_assoc($res1)){
                                    if($row['status'] == 1 || isLogged() == 2 ) {
                                    echo "<div class='col-md-4 col-sm-6 '>
                                    <div class='card ' > 
                                    <img class='' src='assets/img/{$row['Image']}' class='card-img-top' alt='...'>
                                    <span class='float-left'> $ {$row['Price']}</span>
                                        <div class='card-body'>
                                        <h5 class='card-title'>{$row['Title']}</h5>
                                        <p class='card-text'>{$row['Details']}</p>
                                        <a href='pageads.php?ADS-ID={$row['AdsID']}' class='btn btn-primary '>More Details</a>"; 
                                        if ($row['status'] == 1 &&(isLogged() == 2) ){
                                            echo "<a href='adsshoworhide.php?ADS-ID={$row['AdsID']}' class='btn btn-danger ml-2 ' >Hide</a>";
                                        }else if  ($row['status'] == 0 &&(isLogged() == 2) ) {
                                            echo "<a href='adsshoworhide.php?ADS-ID={$row['AdsID']}' class='btn btn-primary ml-2  ' >Show</a>";

                                        }
                                        echo" </div> </div></div>";
                                    }
                                }
                                }else{
                                outputMessage("No products found in our catalog",'warning');
                            }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////                    
                        ?>

                </div>
            </div>
        </section>


    <!-- End Featured Product -->
<?php include_once("footer.php"); ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.m
    in.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>