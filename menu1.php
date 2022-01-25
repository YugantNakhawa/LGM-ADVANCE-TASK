
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="dashboard.php">
    <img src="imgused/header.png" width="30" height="30" class="d-inline-block align-top" alt=""> &nbsp;
        SRMS Admin Dashboard
  </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">  Home   <span class="sr-only">(current)</span></a>
      </li>
      </ul> &emsp;

      <div class="dropdown show">
        <a class="dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Classes
        </a>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="add_classes.php">Add Class</a>
        <a class="dropdown-item" href="manage_classes.php">Manage Class</a>
       </div>
      </div> &emsp;

      <div class="dropdown show">
        <a class="dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Students
        </a>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="add_students.php">Add Student</a>
        <a class="dropdown-item" href="manage_students.php">Manage Student</a>
       </div>
      </div> &emsp;

      <div class="dropdown show">
        <a class="dropdown-toggle text-light" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Results
        </a>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="add_results.php">Add Result</a>
        <a class="dropdown-item" href="manage_results.php">Manage Result</a>
       </div>
      </div> &emsp;

    </ul> &nbsp;
    <button class="btn btn-secondary text-black"> <a href="logout.php" class="text-light"> Log Out </a></button>

  </div>
</nav>