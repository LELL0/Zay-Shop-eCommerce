 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
					<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">Zay Shop</a>
					<ul class="navbar-nav px-3">
					<li class="nav-item text-nowrap">					
    				<a class="nav-link" href="../admin/admin-logout.php">Sign out</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
						<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">Zay Shop</a>
						<ul class="navbar-nav px-3">
						<li class="nav-item text-nowrap">
	    				<a class="nav-link" href="../admin/register.php">Register</a>
	    			<?php
    			}else{
    				?>
						<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">Zay Shop</a>
						<ul class="navbar-nav px-3">
					    <li class="nav-item text-nowrap">
	    				<a class="nav-link" href="../admin/login.php">Login</a>
	    			<?php
    			}		
    		}
    	?> 
    </li>
  </ul>
</nav>