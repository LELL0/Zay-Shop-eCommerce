<?php 
session_start();

class feedback
{
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getfeedback(){
		$query = $this->con->query("SELECT first_name,last_name,email_address,comment FROM feedback WHERE 1");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no feedback data'];
	}		

}
if (isset($_POST["GET_FEEDBACK"])) {
		$c = new feedback();
		echo json_encode($c->getfeedback());
		exit();
}


?>