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
    <link href="main.css" rel="stylesheet">
	
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
        <a class="nav-link">Welcome <?php echo $_SESSION['username']; ?></a></li>
		<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      <?php else : ?>
                <a class="nav-link" href="login.php">Login</a>
				<?php endif ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>
    </div>
    </div>
</nav>

<!-- works -->
<div id="works"  class=" clearfix grid"> 

    </figure>
</div>
<!-- works -->

<!--- Image Slider  photo -->

<div class="container-fluid padding">

<div class="row ">

<?php
$result = mysqli_query($db,"SELECT * FROM albums INNER JOIN picture ON albums.albumId = picture.albumId group by albums.albumId");
while($row = mysqli_fetch_assoc($result)){
	echo ' <div class="col-lg-3 col-md-4 col-xs-6 thumbnail">
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
<!-- team -->
<h3 class="text-center  wowload fadeInUp">Our team</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">	
	<div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <figcaption>
            <p><b>Noah Brownlee</b><br>Front-End Developer<br><br></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
      
        <figcaption>            
            <p><b>Ronald Marita</b><br>Front-End Developer<br><br></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">

        <figcaption>
            <p><b>Marian Mohamed</b><br>Back-End Developer<br><br></p>          
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
      
        <figcaption>
            <p><b>Skyler Jensen </b><br>Back-End Developer<br><br></p>
        </figcaption>
    </figure>
    </div>

 
</div>
<!-- team -->

<!-- Footer Starts -->
<div class="footer text-center spacer">

Copyright 2021 Group 500. All rights reserved.
</div>
<!-- # Footer Ends -->


</body>
</html>



<!-- jquery -->
<script src="styles/jquery.js"></script>

<!-- wow script -->
<script src="styles/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="styles/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="styles/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>



<!-- custom script -->
<script src="styles/script.js"></script>




