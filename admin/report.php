<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Reports</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>Ad ID</th>
              <th>Ad Name</th>
              <th>Details</th>
			  <th>Date</th>
			  <th>Action</th>
            </tr>
          </thead>
          <tbody id="report_list"></tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/report.js"></script>