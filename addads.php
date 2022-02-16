<?php
require_once("connection/conn.php");
session_start();
$isLogged =isLogged();
        if($isLogged ==3){
            header("Location:index.php "); 
		}



		if(isset($_POST["add"])){
			
$Title 	= $_POST['ProTitle'];
$Details= $_POST['ProDetalis'];
$price 	= $_POST['Proprice'];
$Maincategory 	= $_POST['Maincategory'];
$email=$_SESSION["SESSION_EMAIL"] ;
$date = date("y-m-d");
$userid=$_SESSION['loggedInUserId'];





			$fileFinalName = '';
			if($_FILES['image']['name']){
				$fileName 		= $_FILES['image']['name'];
				$fileType 		= $_FILES['image']['type'];
				$fileTmpName 	= $_FILES['image']['tmp_name'];
				$fileError 		= $_FILES['image']['error'];
				$fileSize 		= $_FILES['image']['size'];
				$fileFinalName = time().rand().'_'.$fileName ;
			
				
				//Move uploaded file from tmp directory to assets/images/products 
				move_uploaded_file($fileTmpName,"assets/img/{$fileFinalName}");
				
			}
			
			
			mysqli_query($con, "INSERT INTO `advertisments` (`AdsID`, `Date`, `Status`, `Details`, `Price`, `Image`, `Title`,
			`UserID`, `CategoryID`) VALUES (NULL, '$date', '1', '$Details', '$price', '$fileFinalName', '$Title', '$userid', '$Maincategory')");
			
			mysqli_close($con);
			header("Location:createads.php?status=0");
			}
		
		
		else {
				header("Location:createads.php?status=2");
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