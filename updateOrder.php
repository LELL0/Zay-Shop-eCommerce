<?php
    require_once ('connection/conn.php');
    session_start();  
	
	$ProductId = $_POST['ProductId'];
	$quantity =$_POST['quantity'];

    $Products = mysqli_query($conShop, "SELECT * FROM products WHERE ProductId = $ProductId");
    $Product = mysqli_fetch_array($Products);

	$totalPrice= $Product['Price']*$quantity;

	if(isset($ProductId)){
		$resultCart = mysqli_query($conShop, "SELECT * FROM shoppingcart WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
        if ($rowCart = mysqli_fetch_array($resultCart)){
			mysqli_query($conShop, "UPDATE shoppingcart SET Quantity = $quantity ,Price = $totalPrice WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
		}
		header("Location: ShoppingCart.php");
	}

?>