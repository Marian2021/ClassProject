<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    

	$userId = mysqli_real_escape_string($conn, $_POST['userId']);
	$commentId = mysqli_real_escape_string($conn, $_POST['commentId']);
	$sectionId = mysqli_real_escape_string($conn, $_POST['sectionId']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);


    $sql = "INSERT INTO comment (userId,commentId,sectionId,content) VALUES ('$userId','$commentId','$sectionId','$content')";
    if (mysqli_query($conn, $sql)) {
		echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>