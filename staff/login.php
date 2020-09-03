<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>UniFeed</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-light navbar-sticky-top">
	  <a class="navbar-brand" href="#">
	   	<h3 class="text-white">UniF<span class="text-warning">ee</span>d</h3>
	  </a>
	  <ul class="navbar-nav my-2 my-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link display-5 text-white mr-4" href="../index.php">HOME<span class="sr-only">(current)</span></a>
	      </li>
	  </ul>
	</nav>
	<div class="container text-center">
		<h4 class="display-4 p-2">Staff Login</h4>
			<div class="col-md-6 form-section p-4 mt-4">
				<form action="staffpage.php" method="POST">
					  <div class="form-group pb-4">
					    <label for="username" class="text-dark"><i class="fa fa-user"></i> User Name</label>
					    <input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
					  </div>
					  <div class="form-group pt-4">
					    <label for="password" class="text-dark"><i class="fa fa-key"></i> Password</label>
					    <input name="password" type="password" class="form-control" id="password" placeholder="Enter password">
					  </div>
					  <div>
					  	<button class="btn btn-lg btn-outline-success" type="submit" name="submit"><i class="fa fa-lock"></i> Login</button>
					  </div>
				</form>
			</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>

</body>
</html>