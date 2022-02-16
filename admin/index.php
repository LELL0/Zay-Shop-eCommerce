<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:login.php");
}

include "./templates/top.php"; 

?>

<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Dashboard</h2>
      	</div>
      </div>

	    <div class="row">
		
		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
		<div class="card-body">
		<span data-feather="user"></span>
		<div class="mr-5"><b>Profile</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="profile.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
		<div class="card-body">
		<span data-feather="users"></span>
		<div class="mr-5"><b>Admins</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="admin.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
		<div class="card-body">
		<span data-feather="users"></span>
		<div class="mr-5"><b>Users</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="users.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
		<div class="card-body">
		<span data-feather="layers"></span>
		<div class="mr-5"><b>Categories</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="categories.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
		<div class="card-body">
		<span data-feather="shopping-bag"></span>
		<div class="mr-5"><b>Advertisments</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="advertisments.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      
		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
		<div class="card-body">
		<span data-feather="file-text"></span>
		<div class="mr-5"><b>Job Apply</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="jobapply.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
		<div class="card-body">
		<span data-feather="message-circle"></span>
		<div class="mr-5"><b>Comments</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="comment.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
		
		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
		<div class="card-body">
		<span data-feather="file-text"></span>
		<div class="mr-5"><b>Reports</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="report.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
		<div class="card-body">
		<span data-feather="message-square"></span>
		<div class="mr-5"><b>Feedbacks</b></div>
		</div>
		<a class="card-footer text-white clearfix small z-1" href="feedback.php">
		<span class="float-left">View Details</span>
		<span class="float-right">
		<i class="fa fa-angle-right"></i>
		</span>
		</a>
		</div>
		</div>		
		
		</div>

  </div>
</div>
 


<?php include_once("./templates/footer.php"); ?>

