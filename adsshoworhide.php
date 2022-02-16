<?php
require_once ("connection/conn.php");
showandhide('advertisments','AdsID',$_GET['ADS-ID']);

function showandhide($table,$where,$value) {
	global $con ;
	$result = mysqli_query($con ,"SELECT Status from $table where $where={$value}");
	$row = mysqli_fetch_array($result);
	if($row['Status'] == 1 ){
		$result1 = mysqli_query($con,"UPDATE $table set Status='0' WHERE $where = '$value'") or die("Cannot execute SQL - ".mysqli_error($con));
		return $result1;
	}else {
		$result2 = mysqli_query($con,"UPDATE $table set Status='1' WHERE $where = '$value'") or die("Cannot execute SQL - ".mysqli_error($con));
		return $result2;

	}
}

header("Location: ".$_SERVER['HTTP_REFERER']); 

	?>