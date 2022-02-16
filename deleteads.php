<?php
require_once("connection/conn.php");
$result = mysqli_query($con ,"SELECT Image from advertisments where AdsID=$_GET[ADSID]");
$row = mysqli_fetch_array($result);
$oldImage = $row['Image'];
@unlink("assets/img/{$oldImage}");
mysqli_query($con,"Delete from advertisments Where AdsID = $_GET[ADSID]");
//mysqli_query($con,"UPDATE uploaduser SET isDeleted = 1 Where uploadID = $_GET[id]");
mysqli_close($con);
header("Location: myads.php");
?>