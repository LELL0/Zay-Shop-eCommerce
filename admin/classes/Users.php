<?php 
session_start();

class Users
{
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getUsers(){
		$query = $this->con->query("SELECT users.UserID, users.UserName, users.Email, users.Phone, areas.areaName FROM users,areas WHERE 1 AND users.areaid=areas.areaID");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no user data'];
	}	
	
	public function deleteUser($UserID){
		if ($UserID != null) {
			$q = $this->con->query("DELETE FROM users WHERE users.UserID = '$UserID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'User removed'];
			}else{
				return ['status'=> 202, 'message'=> 'You must delete ads,comments and reports related to this user before.'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid user id'];
		}

	}	

}
if (isset($_POST["GET_USERS"])) {
		$c = new Users();
		echo json_encode($c->getUsers());
		exit();
}

if (isset($_POST['DELETE_USER'])) {
	if (!empty($_POST['UserID'])) {
		$p = new Users();
		echo json_encode($p->deleteUser($_POST['UserID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

?>