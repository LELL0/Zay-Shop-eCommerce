<?php
    require_once ('connection/conn.php');
    session_start();  
	
	$ProductId = $_POST['ProductId'];

	if(isset($ProductId)){

		mysqli_query($conShop, "DELETE FROM shoppingcart WHERE ProductId = $ProductId AND $_SESSION[loggedInUserId]");
		
		header("Location: ShoppingCart.php");
	}

?>