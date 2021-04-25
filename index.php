<!DOCTYPE html>
<?php include('connection.php') ?>
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
                <a class="nav-link" href="pic.php">upload Picture</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<!--- Image Slider  photo -->

<div class="container page-top">

<div class="row">

<?php
$result = mysqli_query($db,"SELECT * FROM albums INNER JOIN picture ON albums.albumId = picture.albumId group by albums.albumId");
while($row = mysqli_fetch_assoc($result)){
	echo ' <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="albumview.php?album='.$row['albumId'].'" class="fancybox" rel="ligthbox">
            <img  src="images/'.$row['pictureDirectory'].'" class="zoom img-fluid "  alt="'.$row['pictureDescription'].'" height="200">
           <p>'.$row['title'].'</p>
        </a>
    </div>';

       }
mysqli_close($db);
?>
</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2 class="display-4"> Welcome to our site</h2> 
            <hr>
               </div>
    </div>
 
</div>

<!--- Connect -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect with Us</h2>
        </div>
        <div class="col-12 social padding">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=engoo"><i class="fab fa-twitter"></i></a>
            <a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
            
            
        </div>
    </div>
</div>

    <!--- Footer -->
<footer>
<div class="container-fluid padding ">
    <div class="row text-center">
        <div class="col-md-4">
            <hr class="light">
            <p>2222-11-001-15</p>
            <p>INFO@GMAIL.COM</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Our Hours</h5>
            <hr class="light">
            <p>Monday: 8pm - 6:30pm</p>
            <p>Friday: 8pm - 5:30pm</p>
            <p>Saturday: 9:30 pm - 4:30pm</p>
        </div>
        <div class="col-md-4">
            <hr class="light">
            <h5>Our Services</h5>
            <hr class="light">
            <p>City ,State,000</p>
            <p>City ,State,000</p>
        </div>
        <div class="col-12">
            <hr class="light">
            <h5>@ Metrostate University</h5>
        </div>
    </div>
</div>

</footer>

</body>
</html>





