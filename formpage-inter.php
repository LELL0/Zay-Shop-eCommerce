
<?php

require_once("connection/conn.php");


// Escape user inputs for security
$first_name = mysqli_real_escape_string($con, $_POST['firstname']);
$last_name = mysqli_real_escape_string($con, $_POST['lastname']);
$email_address = mysqli_real_escape_string($con, $_POST['email']);
$comments = mysqli_real_escape_string($con, $_POST['comments']);


// attempt insert query execution


     
    
    if (strlen($first_name)<3) {
            header("Location:formpage.php?error=1");
    } 
    
    else if (strlen($last_name)<3) {
            header("Location:formpage.php?error=2");
    } 

    else if(strlen($email_address)<7){
            header("Location:formpage.php?error=3");
    }else {

         $sql = "INSERT INTO feedback (first_name, last_name, email_address, comment) VALUES ('$first_name', '$last_name', '$email_address','$comments')";

        mysqli_query($con, $sql);
         header("Location:formpage.php?success");

    }



// close connection
mysqli_close($con);
?>

