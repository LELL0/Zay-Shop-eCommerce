<?php 
session_start();

class comment
{
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getcomment(){
		$query = $this->con->query("SELECT comments.UserID,comments.AdsID,comments.Details,comments.commentID,users.UserName AS un,advertisments.Title AS an FROM advertisments,comments,users WHERE 1 AND comments.UserID=users.UserID AND comments.AdsID=advertisments.AdsID");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no comment data'];
	}

	public function deletecomment($commentID){
		if ($commentID != null) {
			$q = $this->con->query("DELETE FROM comments WHERE comments.commentID = '$commentID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Comment removed'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid comment id'];
		}

	}		
		
}
if (isset($_POST["GET_COMMENT"])) {
		$c = new comment();
		echo json_encode($c->getcomment());
		exit();
}

if (isset($_POST['DELETE_COMMENT'])) {
	if (!empty($_POST['commentID'])) {
		$p = new comment();
		echo json_encode($p->deletecomment($_POST['commentID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}


?>