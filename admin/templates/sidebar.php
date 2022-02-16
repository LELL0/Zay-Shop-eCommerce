<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 

            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'index.php') ? 'active' : ''; ?>" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>			  
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'profile.php') ? 'active' : ''; ?>" href="profile.php">
              <span data-feather="user"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'admin.php') ? 'active' : ''; ?>" href="admin.php">
              <span data-feather="users"></span>
              Admins
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'users.php') ? 'active' : ''; ?>" href="users.php">
              <span data-feather="users"></span>
              Users
            </a>
          </li>	
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="categories.php">
              <span data-feather="layers"></span>
              Categories
            </a>
          </li>		  
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'advertisments.php') ? 'active' : ''; ?>" href="advertisments.php">
              <span data-feather="shopping-bag"></span>
              Advertisements
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'jobapply.php') ? 'active' : ''; ?>" href="jobapply.php">
              <span data-feather="file-text"></span>
              Job Apply
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'comment.php') ? 'active' : ''; ?>" href="comment.php">
              <span data-feather="message-circle"></span>
              Comments
            </a>
          </li>		  
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'report.php') ? 'active' : ''; ?>" href="report.php">
              <span data-feather="file-text"></span>
              Reports
            </a>
          </li>		  
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'feedback.php') ? 'active' : ''; ?>" href="feedback.php">
              <span data-feather="message-square"></span>
              Feedbacks
            </a>
          </li>	  
        </ul>  
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Hello, <?php echo $_SESSION["admin_name"]; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>