
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
</head>

<body>

<nav class='navbar navbar-expand-lg navbar-light shadow'>
        <div class='container d-flex justify-content-between align-items-center'>

          <a class='navbar-brand text-success logo h1 align-self-center' href='index.php' style='margin-right: 5% ;'>
                Zay     
            </a>

            <button class='navbar-toggler border-0' type='button' data-bs-toggle='collapse' data-bs-target='#templatemo_main_nav' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
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
                    
                  
                     
                  <div style='padding-left: 30px; padding-right: 5px; padding-bottom:5px; padding-top: 5px '>
                    <?php
                    if(!isset($_SESSION['usernamelogin'])){
                  echo'  <a class=button style=\'background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \' href=login.php>Login</a>';
                  echo' <a class=button style=\'background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \'href=register.php>Sign Up</a>';
                  echo' <a class=button style=\'background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \'href=admin/login.php>Login as Admin</a>';
                  }
                  else{
                     echo' <a class=button style=\'background-color: #04aa6d; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \'href=createads.php>Add advertisement</a>';
                      echo' <a class=button style=\'background-color: red; color: white;-webkit-appearance: button;-moz-appearance: button;appearance: button;text-decoration: none;margin-left: 5px; padding-left: 7px; padding-right: 7px; padding-bottom:5px; padding-top: 2px \'href=logout.php>Log out from  '.$_SESSION['usernamelogin'].'</a>';
                      
                  }
                 
                  ?>
                  </div>
              </div>
            </div>
        </div>
        
    </nav>


<div class="container py-5">
        
    <?php
    require_once ('connection/conn.php');
    session_start();  

    $shoppingCart=mysqli_query($conShop,"SELECT * FROM shoppingcart WHERE clientId = $_SESSION[loggedInUserId]");
    echo"<h1><a href='Orders.php'>ORDERS</a></h1>";
        while ($rowshoppingCart = mysqli_fetch_array($shoppingCart)){
               
            $Product = mysqli_query($conShop,"SELECT * FROM products WHERE ProductId= $rowshoppingCart[ProductId]");
            $rowProduct = mysqli_fetch_array($Product);
                   echo "
            
                <div class='p-2 pb-3' style='width:500px'>
                    <div class='product-wap card rounded-0'>
                        <div class='card rounded-0'>
                            <img class='card-img rounded-0 img-fluid' src='$rowProduct[ImgPath]'>
                            <div class='card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center'>
                                <ul class='list-unstyled'>
                                    <li><a class='btn btn-success text-white' href='shop-single.php?productId=$rowProduct[ProductId]'><i class='far fa-heart'></i></a></li>
                                    <li><a class='btn btn-success text-white mt-2' href='shop-single.php?productId=$rowProduct[ProductId]'><i class='far fa-eye'></i></a></li>
                                    <li><a class='btn btn-success text-white mt-2' href='shop-single.php?productId=$rowProduct[ProductId]'><i class='fas fa-cart-plus'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class='card-body'>
                            <a href='shop-single.php?productId=$rowProduct[ProductId]' class='h3 text-decoration-none'>$rowProduct[Title]</a>
                            <ul class='w-100 list-unstyled d-flex justify-content-between mb-0'>
                                <li>$rowProduct[Size]</li>
                                <li class='pt-2'>
                                    <span class='product-color-dot color-dot-red float-left rounded-circle ml-1'></span>
                                    <span class='product-color-dot color-dot-blue float-left rounded-circle ml-1'></span>
                                    <span class='product-color-dot color-dot-black float-left rounded-circle ml-1'></span>
                                    <span class='product-color-dot color-dot-light float-left rounded-circle ml-1'></span>
                                    <span class='product-color-dot color-dot-green float-left rounded-circle ml-1'></span>
                                </li>
                            </ul>
                            <ul class='list-unstyled d-flex justify-content-center mb-1'>
                                <li>
                                ";
                                 $rating=$rowProduct['Rating'];
                                $emptyStart = 5-$rating;
                                $counter=5;
                                while($counter>0){
                                    if($rating>0){
                                        echo " <span class='fa fa-star checked'></span>";
                                        $rating =$rating-1;
                                    }
                                    else{
                                        echo "<span class='fa fa-star'></span>";
                                    }
                                    $counter=$counter-1;
                                }


                                echo "  </li>
                            </ul>
                            <p class='text-center mb-0'>$$rowshoppingCart[Price]</p>

                            <div class='col d-grid'>
                            <form method='post' action='checkout.php'>
                                <input type='hidden' name='ProductId' id='ProductId' value='$rowProduct[ProductId]'>
                                    <button type='submit' class='btn btn-success btn-lg' name='buy' value='buy'>Buy</button>
                                    </form>

                                    <form method='post' action='updateOrder.php'>
                                    <li class='list-inline-item text-right'>Quantity<input type='hidden' name='product-quanity' id='product-quanity' value='1'></li>
                                            <input type='number' value='$rowshoppingCart[Quantity]' min='1' max='20' onkeydown='return false' style='width:50px;' name='quantity'>
                                    <input type='hidden' name='ProductId' id='ProductId' value='$rowProduct[ProductId]'>
                            <button type='submit' class='btn btn-success btn-lg' name='update' value='update'>update</button>
                            </form>
                            <form method='post' action='deleteOrder.php'>
                            <button type='submit' class='btn btn-success btn-lg' name='DELETE' value='DELETE'>DELETE</button>
                            <input type='hidden' name='ProductId' id='ProductId' value='$rowProduct[ProductId]'>
                            </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
                ";
            }
        
        ?>
  </div>
                       
    </body>
    </html>