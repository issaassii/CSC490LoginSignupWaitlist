<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
	  <ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link active" href="/seproject/">Home</a>
		</li>
		<?php 
		
		if($_SESSION['rank']=="admin") {
			echo '
			<li class="nav-item">
				<a class="nav-link active" href="/seproject/admin/">Admin</a>
			</li>	
			';
		}
		?>
		</ul>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item">
				<span class="navbar-text" style="color:white;margin-right:5px">Logged in as: <?php echo $_SESSION['email'] ?></span>
				<a href="/seproject/logout.php" class="btn btn-danger">Log Out</a>
			</li>
		</ul>
  </div>
</nav>