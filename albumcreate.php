<!DOCTYPE html>
<?php include('connection.php') ?>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Create Album</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <link href="photo.css" rel="stylesheet">
      <link href="main.css" rel="stylesheet">
	  <style> label{color: white;}</style>
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

  <div class="header"></div>
      <div class="wrapper">
	  <h3>Create Album</h3>
	<form action="albumpost.php" method="post">
		<div class="form-group">
		  <div class="row">
         <div class="input-group">
		  <label for="userId">User Id</label>
		  <select id="userId" name="userId">
		   <?php 
		  $result = mysqli_query($db,"SELECT * from user");
		  while($row = mysqli_fetch_assoc($result)){
		echo '<option value = "'.$row['userId'].'"> '.$row['username'].' </option>';

       }
		  ?>
		  </select>
		  </div>
		  </div><br> 
		  <div class="row">
		  <div class="input-group textarea">
		  <label color="white" for="title">Album Title</label>
		  <input type="text" name="title" value="">
		  </div>
		  </div><br>
		  <div class="row">
		  <div class="input-group textarea">
		  <label for="description">Album Description</label>
		  <textarea name="description" rows="5" cols="20"></textarea><br>
		  </div>
		  </div>
		  <div class="input-group">
               <button type="submit"name="submit" class="btn">Submit</button>
            </div>
		</form>
</body>
</html>