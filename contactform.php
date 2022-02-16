<?php
require_once("connection/conn.php");
session_start();

if (isset($_POST['submit'])){

     $to      = "adreanmsr@gmail.com";
     $subject=$_POST['subject'];
     $message=$_POST['message'];
     $headers = 'From: Client <charbelrmeily@gmail.com>' . "\r\n" . 
               'Reply-To: charbelrmeily@gmail.com' . "\r\n" .
               'MIME-Version: 1.0' . "\r\n" .
               'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    if(mail($to, $subject, $message, $headers))
        
    header("Location: contact.php?status=0");
    
    
    else
       
    header("Location: contact.php?status=1");
  
    
   
}
?>