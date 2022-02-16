<?php
    require_once ('connection/conn.php');
    session_start();  
	
	$ProductId = $_POST['ProductId'];
	$quantity =$_POST['quantity'];
	$productSize=$_POST['product-size'];
	$priceofone=$_POST['priceofone'];
	$totalPrice= $priceofone*$quantity;


if($_POST['submit']=="addtocard"){
	if(isset($ProductId)){
		$resultCheck = mysqli_query($conShop, "SELECT * FROM shoppingcart WHERE ProductId = $ProductId AND clientId=$_SESSION[loggedInUserId]");
		if ($rowCart = mysqli_fetch_array($resultCheck)){
			mysqli_query($conShop, "UPDATE shoppingcart SET Quantity = $rowCart[Quantity]+$quantity ,Price = $rowCart[Price]+$totalPrice WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
		}
		else{
			mysqli_query($conShop, "INSERT INTO shoppingcart (ProductId, Quantity, Price, clientId) values ($ProductId,$quantity,$totalPrice,$_SESSION[loggedInUserId])");
		}
		header("Location:shop.php");
	}
}

elseif($_POST['submit']=="buy"){

	$resultCheck = mysqli_query($conShop, "SELECT * FROM shoppingcart WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
	$rowCart = mysqli_fetch_array($resultCheck);
	mysqli_query($conShop, "INSERT INTO shoppingcart (ProductId, Quantity, Price, clientId) values ($ProductId,$quantity,$totalPrice,$_SESSION[loggedInUserId])");

	header("Location:checkout.php?ProductId=$ProductId");

}
?>