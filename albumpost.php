<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    

	$userid = mysqli_real_escape_string($conn, $_POST['userid']);
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);

    $sql = "INSERT INTO albums (userId,title,description) VALUES ('$userid','$title','$description')";
    if (mysqli_query($conn, $sql)) {
		echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>