<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Job Apply</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
			  <th>#</th>			
              <th>Name</th>
              <th>Email</th>
              <th>Age</th>
			  <th>Biography</th>			
              <th>Job</th>
              <th>Interests</th>
			  <th>Image</th>
			  <th>Action</th>
            </tr>
          </thead>
          <tbody id="jobapply_list"></tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/jobapply.js"></script>