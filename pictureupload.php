<!DOCTYPE html>
<?php include_once 'db.php';
   include('connection.php');
   include('picturepost.php');
   error_reporting(0); // For not showing any error
   ?>
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
            <a class="navbar-brand" href="#"><img src="img/synopsys_color.png" width="240" height="100"></a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse"
               data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span></button>
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
                     <p class="nav-link">Welcome <?php echo $_SESSION['username']; ?></p>
                  </li>
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
      <!--comment section -->
      <div class="header"></div>
      <div class="wrapper">
         <form action="picturepost.php" method="POST" class="form" enctype="multipart/form-data">
            <h3> Upload Pictures</h3>
            <div class="row">
               <div class="input-group">
                  <label for="pictureTitle">Title</label>
                  <input type="text" name="pictureTitle" placeholder="Enter title" required>
               </div>
            </div>
            <div class="input-group textarea">
               <label for="pictureDescription">Description</label>
               <textarea  name="pictureDescription" placeholder="Enter your description" required></textarea>
            </div>
			<div class="input-group">
             <label for="pictureTitle">User Id</label>
            <select id="userId" name="userId">
		   <?php 
		  $result = mysqli_query($db,"SELECT * from user");
		  while($row = mysqli_fetch_assoc($result)){
		echo '<option value = "'.$row['userId'].'"> '.$row['username'].' </option>';

       }
		  ?>
		  </select></div>
			<div class="input-group">
            <label for="albumId">Album</label>
			<select id="albumId" name="albumId">
		  <?php 
		  $result = mysqli_query($db,"SELECT * from albums");
		  while($row = mysqli_fetch_assoc($result)){
		echo '<option value = "'.$row['albumId'].'"> '.$row['title'].' </option>';

       }
		  ?>
		  </select></div>
            <div class="col-md-10">
               <input type="file" name="image" id="image" required />
            </div>
            <div class="input-group">
               <button type="submit"name="submit" class="btn">Submit</button>
            </div>
         </form>
      </div>
   </body>
</html>
