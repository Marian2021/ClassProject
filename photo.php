<?php include_once 'db.php';
include('connection.php');
include('picturepost.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Picture Post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="photo.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

	
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
                <a class="nav-link" href="photo.php">Picture Description</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!--comment section -->
      <div class="wrapper">
         <form action="" method="POST" class="form">
            <div class="row">
               
               <div class="input-group">
                  <label for="name">Title</label>
                  <input type="text" name="pictureTitle" id="text" placeholder="Enter title" required>
               </div>

            </div>
            <div class="input-group textarea">
               <label for="pictureDescription">Description</label>
               <textarea id="pictureDescription" name="pictureDescription" placeholder="Enter your description" required></textarea>
            </div>
            <div class="col-md-10">
            <p>Upload Picture</p>
            <input type="file" name="image" id="image" require />
</div>
            <div class="input-group">
               <button type="submit"name="submit" class="btn">Submit</button>
            </div>
         </form>
      </div>
   </body>
</html>