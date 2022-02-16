<?php 
session_start();

class jobapply
{
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getjobapply(){
		$query = $this->con->query("SELECT * FROM jobapply WHERE 1");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no job apply data'];
	}

	public function deletejobapply($uploadID){
		if ($uploadID != null) {
			$q = $this->con->query("DELETE FROM jobapply WHERE uploadID='$uploadID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Job Apply removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid job apply id'];
		}

	}	
		
}
if (isset($_POST["GET_JOBAPPLY"])) {
		$c = new jobapply();
		echo json_encode($c->getjobapply());
		exit();
}

if (isset($_POST['DELETE_JOBAPPLY'])) {
	if (!empty($_POST['uploadID'])) {
		$p = new jobapply();
		echo json_encode($p->deletejobapply($_POST['uploadID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}
?>