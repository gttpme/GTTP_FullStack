


<nav class="navbar navbar-expand-sm navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="/index.php">GTTP</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto" style="border-color: white;">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
	  
	  <?php if(isset($_SESSION['username'])) {
		  echo htmlspecialchars($_SESSION['username']); 
	  }
	   ?></a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="PHPscripts/logout.php">Logout</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Winners</a>
    </li>
	<?php
	if(!(isset($_SESSION['username']))) {
		echo '
    <li class="nav-item">
      <a class="nav-link" href="LogInTest.php">Log in</a>
    </li>';
	};
	?>
	<li class="nav-item">
	  <a class="nav-link" href="Registration.php"> Register </a>
	</li>
  </ul>
  </div>
</nav>
