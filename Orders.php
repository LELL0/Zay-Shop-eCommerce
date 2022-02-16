
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
              <div class='navbar align-self-center d-flex'>
                    
                  
                     
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


	<?php
	 require_once ('connection/conn.php');
     session_start(); 

	$orders = mysqli_query($conShop, "SELECT * FROM orders WHERE clientId = $_SESSION[loggedInUserId]");

     
	echo "<h1><a href='Shop.php'>Shop</a></h1>";

    while($rowOrder = mysqli_fetch_array($orders)){
        $products = mysqli_query($conShop, "SELECT * FROM products WHERE ProductId=$rowOrder[ProductId]");
        $product = mysqli_fetch_array($products);
	
echo"
    <h2>Product Name: $product[Title]</h2>
    <h2>Items Added: $rowOrder[orderId]</h2>
    <h2>ProductId : $product[ProductId]</h2>
    <h2>Price of one: $$product[Price]</h2>
    <h2>Quantity: $rowOrder[Quantity]</h2>
    <h2>Total Price: $$rowOrder[Price]</h2>
    <h2>DateOf Order: $rowOrder[DateOfOrder]</h2>
    <h2>========================================</h2>
";
}

	?>
	
	
</body>
</html>