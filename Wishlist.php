<?php

require_once ("connection/conn.php");


$adsId = $_GET['ADS-ID'];
$userId = $_GET['USER-ID'];

$result = mysqli_query($con, "SELECT likedIf1 FROM userlikead WHERE userId=$userId and adsId=$adsId");
if(mysqli_num_rows($result) == false){

    mysqli_query($con, "INSERT INTO userlikead (adsId, userId, likedIf1) VALUES ($adsId, $userId, 1)");
    mysqli_close($con);
    header("Location:pageads.php?success=3&ADS-ID=".$_GET['ADS-ID']."&USER-ID=".$userId);

}
else{
	$row = mysqli_fetch_assoc($result);
	

	if ($row['likedIf1'] == 0)

	{
		


	    mysqli_query($con, "UPDATE userlikead SET likedIf1= 1 WHERE userId= $userId AND adsId=$adsId");
   		mysqli_close($con);
	    header("Location:pageads.php?success=1&ADS-ID=".$_GET['ADS-ID']."&USER-ID=".$userId);
	}
elseif ($row['likedIf1'] == 1)

	{
		$row = mysqli_fetch_assoc($result);

	    mysqli_query($con, "UPDATE userlikead SET likedIf1= 0 WHERE userId= $userId AND adsId=$adsId ");
  		 mysqli_close($con);
	     header("Location:pageads.php?success=2&ADS-ID=".$_GET['ADS-ID']."&USER-ID=".$userId);
	}


}



?>
