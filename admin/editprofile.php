<?php include "./templates/top.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4 class="text-center">Edit Profile</h4>
			<p class="message"></p>
			<form id="admin-editprofile-form">
			  <div class="form-group">
			    <label for="name">Full Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email Address</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			    
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirm Password</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_editprofile" value="1">
			  <button type="button" class="btn btn-primary editprofile-btn">Save</button>
			  <a href="profile.php" class="btn btn-primary">Cancel</a>
			</form>
		</div>
	</div>
</div>

<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/editprofile.js"></script>