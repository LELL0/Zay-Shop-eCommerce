<?php
//1) Connect to DB SERVER 
require_once ("connection/conn.php");
session_start();

$isLogged =isLogged();
        if($isLogged ==3){
            header("Location:login.php?error=20 "); 
		}//receive form data 
$textarea 	= $_POST['textarea'];
$date = date("y-m-d");
$AdsID = $_POST['AdsID'];
if(isLogged() == 1){
    $UserID = $_SESSION['loggedInUserId'];
}else if(isLogged() == 2){
    $UserID =0;
}else{
    header("Location:index.php "); 
}

if (empty(trim($textarea))){
    header("Location: ".$_SERVER['HTTP_REFERER']); 

}else{

//3) SEND SQL query 
$result = mysqli_query($con,"INSERT INTO `comments` (`commentID`, `Date`, `Status`, `Details`, `UserID`, `AdsID`) VALUES
(NULL, '$date', '1', '$textarea', '$UserID', '$AdsID')") or die("Cannot execute SQL - ".mysqli_error($con));

//4) Receive & Process result


// ECHO 'comment  has been successfully saved <br>';
// header("refresh:2;url=index.php");
header("Location: ".$_SERVER['HTTP_REFERER']); 
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


?>