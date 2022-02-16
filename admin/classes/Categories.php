<?php 
session_start();

class Categories
{
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}
	
	public function addCategory($name){
		$q = $this->con->query("SELECT * FROM categories WHERE CategoryName = '$name' LIMIT 1");
		if ($q->num_rows > 0) {
			return ['status'=> 303, 'message'=> 'Category already exists'];
		}else{
			$q = $this->con->query("INSERT INTO categories (CategoryName) VALUES ('$name')");
			if ($q) {
				return ['status'=> 202, 'message'=> 'New Category added Successfully'];
			}else{
				return ['status'=> 303, 'message'=> 'Failed'];
			}
		}
	}	

	public function getCategories(){
		$query = $this->con->query("SELECT categories.CategoryID , categories.CategoryName , (SELECT COUNT(AdsID) FROM advertisments WHERE categories.CategoryID=advertisments.CategoryID) AS c FROM categories WHERE 1");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no category data'];
	}	
	
	
	public function deleteCategory($CategoryID){
		if ($CategoryID != null) {
			$q = $this->con->query("DELETE FROM categories WHERE CategoryID='$CategoryID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Category removed'];
			}else{
				return ['status'=> 202, 'message'=> 'You must delete the advertisments related to this category before'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid category id'];
		}

	}		

	public function updateCategory($post = null){
		extract($post);
		if (!empty($CategoryID) && !empty($CategoryName)) {
			$q = $this->con->query("UPDATE categories SET CategoryName = '$CategoryName' WHERE CategoryID = '$CategoryID'");
			if ($q) {
				return ['status'=> 202, 'message'=> 'Category updated'];
			}else{
				return ['status'=> 202, 'message'=> 'Failed'];
			}
			
		}else{
			return ['status'=> 303, 'message'=>'Invalid category id'];
		}

	}

}

if (isset($_POST['add_category'])) {
	if (isset($_SESSION['admin_id'])) {
		$CategoryName = $_POST['CategoryName'];
		if (!empty($CategoryName)) {
			$p = new Categories();
			echo json_encode($p->addCategory($CategoryName));
		}else{
			echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
		}
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Session Error']);
	}
}

if (isset($_POST["GET_CATEGORIES"])) {
		$c = new Categories();
		echo json_encode($c->getCategories());
		exit();
}



if (isset($_POST['DELETE_CATEGORY'])) {
	if (!empty($_POST['CategoryID'])) {
		$p = new Categories();
		echo json_encode($p->deleteCategory($_POST['CategoryID']));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

if (isset($_POST['edit_category'])) {
	if (!empty($_POST['CategoryID'])) {
		$p = new Categories();
		echo json_encode($p->updateCategory($_POST));
		exit();
	}else{
		echo json_encode(['status'=> 303, 'message'=> 'Invalid details']);
		exit();
	}
}

?>