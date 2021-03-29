<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    

	$pictureId = mysqli_real_escape_string($conn, $_POST['pictureId']);
	$userId = mysqli_real_escape_string($conn, $_POST['userId']);
	$albumId = mysqli_real_escape_string($conn, $_POST['albumId']);
	$pictureDescription = mysqli_real_escape_string($conn, $_POST['pictureDescription']);
	$pictureTitle = mysqli_real_escape_string($conn, $_POST['pictureTitle']);
	$pictureDirectory = mysqli_real_escape_string($conn, $_POST['pictureDirectory']);

    $sql = "INSERT INTO picture (pictureId,userId,albumId,pictureDescription,pictureTitle,pictureDirectory) VALUES ('$pictureId','$userId','$albumId','$pictureDescription','$pictureTitle','$pictureDirectory')";
    if (mysqli_query($conn, $sql)) {
		echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>