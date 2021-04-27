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
  <title>Image View</title>
  <link rel="stylesheet" type="text/css" href="album.css">
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
  	<h2>Image</h2>
	
  </div>


<?php
$picture = $_GET['picture'];
$result = mysqli_query($db,"SELECT * FROM picture INNER JOIN user ON picture.userId = user.userId where picture.pictureId = ".$picture."");

while($row = mysqli_fetch_assoc($result)){
	echo '
        <a href="images/'.$row['pictureDirectory'].'" class="fancybox" rel="ligthbox">
            <img  src="images/'.$row['pictureDirectory'].'" class="zoom img-fluid "  alt="'.$row['pictureDescription'].'" height="200">
        </a>
		<p>Title: '.$row['pictureTitle'].'</p>
		<p>Description: '.$row['pictureDescription'].'</p>
		<p>Uploader: '.$row['username'].'</p>
		<a href="albumview.php?album='.$row['albumId'].'"> Back to album</a>
		<p><br></p>
    ';

       }
mysqli_close($db);
?>
	
  
</body>
</html>