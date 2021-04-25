<?php include 'connection.php';?>


<!DOCTYPE html>
<html lang="en">
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
        <a class="navbar-brand" href="#"><img src="img/synopsys_color.png" width="200" height="90"></a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">

    <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse"id ="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pic.php">Upload Picture</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<html lang="en">
  <head>
    <link rel="stylesheet" href="pic.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="picturepost.php" method="post" enctype="multipart/form-data" >
          <h3>Upload Picture</h3>
		  Title: <input type="text" name="pictureTitle"><br> 
		  
		  Description: <textarea name="pictureDescription" rows="5" cols="20"></textarea><br> 
		  
		  User Id: <input type="number" name="userId"><br> 
		  
		  Album: <select id="albumId" name="albumId">
		  <?php 
		  $result = mysqli_query($db,"SELECT * from albums");
		  while($row = mysqli_fetch_assoc($result)){
		echo '<option value = "'.$row['albumId'].'"> '.$row['title'].' </option>';

       }
		  ?>
		  
		  Picture: <input type="file" name="image" id="image" required/><br> 
		  
		  Submit: <input type="submit" name="submit" value="Submit">
        </form>
      </div>
    </div>
  </body>
</html>