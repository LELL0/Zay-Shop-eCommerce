<?php 
session_start();

class Advertisments
{
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getAdvertisments(){
		$query = $this->con->query("SELECT advertisments.AdsID,advertisments.status, advertisments.Title, advertisments.Image , advertisments.Price , advertisments.userID , users.UserName, categories.CategoryName FROM advertisments,categories,users WHERE 1 AND advertisments.categoryID=categories.CategoryID  AND advertisments.userID=users.userID");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no advertisment data'];
	}	
	
	public function deleteAdvertisment($AdvertismentID){
		if ($AdvertismentID != null) {
			$q = $this->con->query("DELETE FROM advertisments WHERE AdsID = '$AdvertismentID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Advertisment removed'];
			}else{
				return ['status'=> 202, 'message'=> 'You must delete comments and reports related to this ad before'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Advertisment id'];
		}

	}

	public function hideAdvertisment($AdvertismentID){
		if ($AdvertismentID != null) {
			$q = $this->con->query("UPDATE advertisments SET status = 0 WHERE AdsID = '$AdvertismentID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Advertisment updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Advertisment id'];
		}

	}

	public function unhideAdvertisment($AdvertismentID){
		if ($AdvertismentID != null) {
			$q = $this->con->query("UPDATE advertisments SET status = 1 WHERE AdsID = '$AdvertismentID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Advertisment updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid Advertisment id'];
		}

	}	

}
if (isset($_POST["GET_ADVERTISMENTS"])) {
		$c = new Advertisments();
		echo json_encode($c->getAdvertisments());
		exit();
}

if (isset($_POST['DELETE_ADVERTISMENT'])) {
	if (!empty($_POST['AdvertismentID'])) {
		$p = new Advertisments();
		echo json_encode($p->deleteAdvertisment($_POST['AdvertismentID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

if (isset($_POST['HIDE_ADVERTISMENT'])) {
	if (!empty($_POST['AdvertismentID'])) {
		$p = new Advertisments();
		echo json_encode($p->hideAdvertisment($_POST['AdvertismentID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

if (isset($_POST['UNHIDE_ADVERTISMENT'])) {
	if (!empty($_POST['AdvertismentID'])) {
		$p = new Advertisments();
		echo json_encode($p->unhideAdvertisment($_POST['AdvertismentID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}



?>