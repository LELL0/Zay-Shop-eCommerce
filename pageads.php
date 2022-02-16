<?php

require_once ("connection/conn.php");
session_start();

?>

<!DOCTYPE html>



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
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"><title>Zay Shop eCommerce</title>
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/pageads.css"/>



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



<section class="ads">
        <?php
        // get id ads to get information ads
        $AdsID = $_GET['ADS-ID'];
        $resultADS=mysqli_query($con,"SELECT Date,Details,Price,Image,Status,Title,CategoryID,UserID FROM advertisments WHERE AdsID=$AdsID");
        $rowADS=mysqli_fetch_assoc($resultADS);
        $UserID = $rowADS['UserID'];
        // admin only can to visit this page
        if ($rowADS['Status'] == 0 && isLogged() !== 2 ){
            header('location:index.php');
        }
        ######################### get information user by UserID owner ADS
        $resultuser=mysqli_query($con,"SELECT UserName,Email,Phone,areaID FROM users WHERE UserID=$UserID");
        $rowuser=mysqli_fetch_assoc($resultuser);
        ######################### get name area  by areasID
        $areaID = $rowuser['areaID']; 
        $resultareas=mysqli_query($con,"SELECT areaName,cityID FROM areas WHERE areaID=$areaID");
        $rowareas=mysqli_fetch_assoc($resultareas);
        ######################### get name city by cityID
        $cityID = $rowareas['cityID']; 
        $resultcity=mysqli_query($con,"SELECT cityName FROM cities WHERE cityID=$cityID");
        $rowcity=mysqli_fetch_assoc($resultcity);
        ####################################################################################
        ########################## get name categories ID
        $CategoryID = $rowADS['CategoryID'];
        $resultCategory=mysqli_query($con,"SELECT CategoryName FROM categories WHERE CategoryID=$CategoryID");
        $rowCategory=mysqli_fetch_assoc($resultCategory);
        #############################################################################  get name report user ID
        $AdsID ; 
        $resultreport=mysqli_query($con,"SELECT UserID FROM report WHERE AdsID=$AdsID");
        $rowreport=mysqli_fetch_assoc($resultreport);
        ?>
        <div class="container">
            <hr>
                
            <div class="card">
                    <div class="row">
                        <aside class="col-sm-5 border-right">
                            <div class="text-center "> <a href="#"><img src='assets/img/<?php echo $rowADS['Image'];?>'></a></div>
                            <hr>
                            <div class=" pl-5">
                                <dl class="param param-feature">
                                    <dt>user name</dt>
                                    <dd><?php echo $rowuser['UserName'];?></dd>
                                </dl>  <!-- item-property-hor .// -->
                                <dl class="param param-feature">
                                    <dt>Email </dt>
                                    <dd><?php echo $rowuser['Email'];?></dd>
                                </dl>  <!-- item-property-hor .// -->
                                <dl class="param param-feature">
                                    <dt>phone</dt>
                                    <dd><?php echo $rowuser['Phone'];?></dd>
                            </dl>  <!-- item-property-hor .// -->
                            </dl>  <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>Address</dt>
                                <dd><?php echo $rowcity['cityName'] ." , ".$rowareas['areaName'];?></dd>
                            </dl>  <!-- item-property-hor .// -->
                            </div> <!-- card-body.// -->
                        </aside>
                        <aside class="col-sm-7">
                            <article class="card-body p-5">
                                <h3 class="title mb-3"><?php echo $rowADS['Title'];?></h3>
                            <dl class="item-property">
                                <dt>Description</dt>
                                    <dd><p><?php echo $rowADS['Details'];?></p></dd>
                            </dl>
                            <dl class="param param-feature">
                                <dt>price</dt>
                                <dd><?php echo $rowADS['Price'];?></dd>
                            <dl class="param param-feature">
                                <dt>date</dt>
                                <dd><?php echo $rowADS['Date'];?></dd>
                            </dl>  <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>category</dt>
                                <dd><?php echo $rowCategory['CategoryName'];?></dd>
                            </dl>  <!-- item-property-hor .// -->
                            <hr>
                            <?php

                              echo" <a class=button style=\"background-color: red;font-size=30px; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=Report.php?ADS-ID=".$AdsID.">Report</a>";


                              
                              echo" <a class=button style=\"background-color: #04aa67;font-size=30px; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=userAd.php?USER-ID=".$UserID.">show user's ads</a>";

                              ?>
                              

                              <?php



                            $resultLike = mysqli_query($con, "SELECT likedIf1 FROM userlikead WHERE userId=$UserID and adsId=$AdsID");
                            if(mysqli_num_rows($resultLike) == false){

                                echo" <a class=button style=\"background-color: white;font-size=30px; color: #fa6aee;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=Wishlist.php?ADS-ID=".$AdsID."&USER-ID=".$UserID.">Wishlist</a>";

                            }
                            else{
                                
                                $rowLike = mysqli_fetch_assoc($resultLike);

                                if ($rowLike['likedIf1'] == 1)

                                {
                                    echo" <a class=button style=\"background-color:#fa6aee;font-size=30px; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=Wishlist.php?ADS-ID=".$AdsID."&USER-ID=".$UserID.">Wishlist</a>";
                                } 

                                if ($rowLike['likedIf1'] == 0)

                                {
                                   echo" <a class=button style=\"background-color: white;font-size=30px; color: #fa6aee;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \" href=Wishlist.php?ADS-ID=".$AdsID."&USER-ID=".$UserID.">Wishlist</a>";
                                } 
                            }


                               ?>


                            </article> <!-- card-body.// -->
                    </aside> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
        </div>
            <!--container.//-->

</section>
<section class="comment">

<div class="container px-5">
        <?php 
         $resultcomments=mysqli_query($con,"SELECT users.UserName, comments.Date, comments.Details , comments.UserID
                                            from users , comments 
                                            WHERE comments.AdsID=$AdsID 
                                            and users.UserID=comments.UserID");
        
         while($rowcomments = mysqli_fetch_assoc($resultcomments)){
         echo "<div class='card'>
             <div class='card-header'>{$rowcomments['UserName']}</div>
             <div class='card-body'>{$rowcomments['Details']}</div>
             <div class='card-footer text-right'>{$rowcomments['Date']}</div>
         </div>";
        echo "<div class='listcomments '>";

}



        $comments = $rowcomments ; 
        for($i=0;$i<@sizeof($comments);$i++)
                    {if($comments[$i]['Status'] == 1 ){
                        echo "
                        <div class='p-1' >

                        <div class='card '>
                        <div class='card-header pt-1 pb-1'>    
                            <img src='assets/img/user.jpg'> <span class='float-right pt-4'>{$comments[$i]['Date']}</span>
                        {$comments[$i]['UserName']}</div>
                        <div class='card-body pt-2 pb-2 '>{$comments[$i]['Details']}</div>
                        </div>
                        "; 
                        // show button
                        if ($comments[$i]['Status'] == 1 &&(isLogged() == 2) ){
                            echo "<a href='commentshoworhide.php?comment-ID={$comments[$i]['commentID']}' class='btn btn-danger mt-2' >Hide<a>";
                        }
                        echo "</div> ";
                    } else if (isLogged() == 2){
                        echo "
                        <div class='p-1 ' >

                        <div class='card overright'>
                        <div class='card-header pt-1 pb-1'>    
                            <img src='assets/img/user.jpg'> <span class='float-right pt-4'>{$comments[$i]['Date']}</span>
                        {$comments[$i]['UserName']}</div>
                        <div class='card-body pt-2 pb-2'>{$comments[$i]['Details']}</div>
                        </div>
                        "; 
                        // show button 
                            if ($comments[$i]['Status'] == 0 &&(isLogged() == 2) ){
                            echo "<a href='commentshoworhide.php?comment-ID={$comments[$i]['commentID']}' class='btn btn-primary mt-2 ' >Show<a>";
                        }
                        echo "</div> ";
                    }else{
                        echo "";
                    }

        }
        ?> 
        </div>
    <form action="sendcomment.php"  method='POST'>
            <div class="form-group" >
                <label >comments</label>
                <input type="hidden" name="AdsID" value="<?php echo $AdsID ?>" >
                <textarea class="form-control" name="textarea"  rows="3"></textarea>
        <input 
                <?php $isLogged =isLogged();
                if($isLogged ==1 || $isLogged ==2){
                       echo " type=\"submit\" class=\"btn btn-primary float-right\">Send";

                }else {
                    echo " type=\"submit\" name=\"submitlogin\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-primary float-right mb-5\" value=\"Send\"";
                }?>
        <?php  
            function isLogged(){
                if(isset($_SESSION['LOGGEDIN'])){
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



?> 
>
            </div>
    </form>
</div>

</section>
<br><br>

<?php include_once("footer.php"); ?>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>