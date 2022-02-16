<!DOCTYPE html>
<html lang="en">

<?php
        require_once ("connection/conn.php");
        session_start();
        
        $isLogged =isLogged();
                if($isLogged ==3){
                    header("Location:index.php "); 
                }
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
                   

<body class="welcome">
    
<form action="search.php" name="form1" method="post" novalidate="novalidate">

<div id="main">
<div id="left">
<?php
require_once("connection/conn.php");
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == false){
        echo "No results found";
    } else {
    echo "Categories (<a href='search.php'>All</a>)<br>";
        while($row = mysqli_fetch_array($result)){
            $catID = $row["CategoryID"];
            $sql1 = "SELECT COUNT(CategoryID) AS C_Items FROM advertisments WHERE CategoryID = $catID and status=1";
            $result1 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_array($result1);
            echo $row["CategoryName"] . " (<a href='search.php?catID=$catID'>" . $row1["C_Items"] . "</a>)<br>";
        }
    }

?>
</div>

<section class="search-sec">
  <div class="container">
  
  <div class="row">
             <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                          
                        
                            <input type="text" class="form-control search-slt" placeholder="Enter area " name="key" required>


                        </div>
                        <div class="row">
             <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter product " name="keyword" required>
                 


                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select name="CatID" id="CatID" class="form-control search-slt">
                                <option value="" selected="selected">Categories</option>
                                
        <?php
        $result = mysqli_query($con, "Select CategoryID, CategoryName from categories");
        while($row=mysqli_fetch_array($result)){
            echo "<option value='$row[CategoryID]'>$row[CategoryName]</option>";
        }
        ?>
                            </select>
                        </div>
                        <span class="col-lg-3 col-md-3 col-sm-12 p-0">
        <input type="submit" class="btn btn-danger wrn-btn" name="button" id="button" value="Search" />
        </span>
                    </div>
                   
                </div>
                
            </div>
            <br><br><br><br><br><br><br><br>
            <?php
if (!isset($_POST['button']))
{

    if (isset($_GET["catID"]))
    {
        $catID = "WHERE CategoryID =" . $_GET["catID"];
    }
    else
    {
        $catID = "";
    }
    $sql = "SELECT * FROM advertisments $catID ORDER BY CategoryID ASC";
    $result = mysqli_query($con, $sql);

}

else
{
    if ($_POST["CatID"] != "")
    {

        if ($_POST["keyword"] && $_POST["key"])
        {

            $search = "CategoryID = $_POST[CatID] and  Title LIKE '%$_POST[keyword]%' and areaName  LIKE '%$_POST[key]%' and users.areaID=areas.areaID  and users.UserID=advertisments.UserID";
        }
        else if ($_POST["keyword"])
        {

            $search = "CategoryID = $_POST[CatID] and Title LIKE '%$_POST[keyword]%' and users.areaID=areas.areaID  and users.UserID=advertisments.UserID";
        }
        else if ($_POST["key"])
        {

            $search = "CategoryID = $_POST[CatID] and areaName  LIKE '%$_POST[key]%' and users.areaID=areas.areaID and users.UserID=advertisments.UserID";

        }
        else

        $search = "CategoryID = $_POST[CatID] and users.areaID=areas.areaID  and users.UserID=advertisments.UserID";
    }

    else
    {
        if ($_POST["keyword"] && $_POST["key"])
        {

            $search = " Title LIKE '%$_POST[keyword]%' and areaName  LIKE '%$_POST[key]%' and users.areaID=areas.areaID  and users.UserID=advertisments.UserID  ";

        }

        else if ($_POST["keyword"])
        {

            $search = " Title LIKE '%$_POST[keyword]%' and users.areaID=areas.areaID  and users.UserID=advertisments.UserID";
        }
        else if ($_POST["key"])
        {

            $search = "areaName  LIKE '%$_POST[key]%' and users.areaID=areas.areaID  and users.UserID=advertisments.UserID";

        }

        else $search = " advertisments.Status=1 and users.areaID=areas.areaID  and users.UserID=advertisments.UserID ";

    }

    $sql = "SELECT * FROM advertisments,users,areas WHERE $search";
    $result = mysqli_query($con, $sql);
}

if (mysqli_num_rows($result) == false)
{
    echo "No results found";
}
else
{

    while ($row = mysqli_fetch_array($result))
    {

        if ($row['status'] == 1  || isLogged() == 2)
        {
            echo "<div class='col-md-4 col-sm-6 '>
            <div class='card ' > 
            <img class='' src='assets/img/{$row['Image']}' class='card-img-top' alt='...'>
            <span class='float-left'> $ {$row['Price']}</span>
                <div class='card-body'>
                <h5 class='card-title'>{$row['Title']}</h5>
                <p class='card-text'>{$row['Details']}</p>
                <a href='pageads.php?ADS-ID={$row['AdsID']}' class='btn btn-primary '>More Details</a>";
            if ($row['status'] == 1  &&(isLogged() == 2))
            {
                echo "<a href='adsshoworhide.php?ADS-ID={$row['AdsID']}' class='btn btn-danger ml-2 ' >Hide</a>";
            }
            else if ($row['status'] == 0  &&(isLogged() == 2))
            {
                echo "<a href='adsshoworhide.php?ADS-ID={$row['AdsID']}' class='btn btn-primary ml-2  ' >Show</a>";

            }
            echo " </div> </div></div>";

        }

    }
}
function isLogged(){
    if(isset($_SESSION['usernamelogin'])){
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


mysqli_close($con);
?>

       
        </form>
    </div>
</section>
<style>
 .search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
    background-color:green;
}
.welcome{
background-color:#fff;

}
#left{
    position:relative;
    width:30%;
    float:left;
    padding:10px;
    box-sizing:border-box;
    background-color:#fff;
}
  </style>
</body>