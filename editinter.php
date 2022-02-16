<?php
require_once("connection/conn.php");
session_start();



		if(isset($_POST["Edit"])){
           
            
            
            $ProTitle    	= $_POST['ProTitle'];
            $ProDetalis     = $_POST['ProDetalis'];
            $Proprice       = $_POST['Proprice'];
            $AdsID = $_POST['AdsID'];
            $Maincategory = $_POST['Maincategory'];
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
                 
                
                move_uploaded_file($fileTmpName,"assets/img/{$fileFinalName}");
                
                $result = mysqli_query($con ,"SELECT Image from advertisments where AdsID={$AdsID}");
                $row = mysqli_fetch_array($result);
                $oldImage = $row['Image'];
                @unlink("assets/img/{$oldImage}");
            
                
                }
                $result = mysqli_query($con,"UPDATE advertisments set Date='$date', status='1' ,Details='$ProDetalis' ,Price='$Proprice',Image='$fileFinalName' , Title='$ProTitle' ,UserID='$userid', CategoryID='$Maincategory' WHERE AdsID = '$AdsID'") ;
                
        header("Location:myads.php?status=3");
            
        }
        else {
            header("Location:myads.php?status=2");
        }
    
        ?>