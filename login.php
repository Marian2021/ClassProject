<!DOCTYPE html>
<?php include('connection.php') ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Group 500 photo website</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
	
</head>
<body>
	<!-- Navigation -->
<nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">

    <div class="collapse navbar-collapse"id ="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="pictureupload.php">Upload Picture</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="albumcreate.php">Create Album</a>
            </li>
            <li class="nav-item">
			<?php if (isset($_SESSION['username'])) : ?>
        <p class="nav-link">Welcome <?php echo $_SESSION['username']; ?></p></li>
		<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      <?php else : ?>
                <a class="nav-link" href="login.php">login</a>
				<?php endif ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

  
</body>

</html>