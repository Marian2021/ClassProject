<!DOCTYPE html>
<?php include('connection.php') ?>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="stlyle.css" rel="stylesheet">
  <title>Album View</title>
  <link rel="stylesheet" type="text/css" href="album.css">
 
  
  <link rel="stylesheet" type="text/css" href="photo.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <!-- Navigation -->
<nav class ="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        
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
  	<h2>Album</h2>
  </div>
<div class="container-fluid">

<div class="row">

<?php
$album = $_GET['album'];
$result = mysqli_query($db,"SELECT * FROM albums INNER JOIN picture ON albums.albumId = picture.albumId where albums.albumId = ".$album."");

while($row = mysqli_fetch_assoc($result)){
	echo ' <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="photoview.php?picture='.$row['pictureId'].'" class="fancybox" rel="ligthbox">
            <img  src="images/'.$row['pictureDirectory'].'" class="zoom img-fluid "  alt="'.$row['pictureDescription'].'" height="200">
           <p>'.$row['pictureTitle'].'</p>
        </a>
    </div>';

       }
mysqli_close($db);
?>
</div>
</div>
  
</body>
</html>