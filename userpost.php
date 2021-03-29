<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password = md5($password);
	$userId = mysqli_real_escape_string($conn, $_POST['userId']);
	$permissions = mysqli_real_escape_string($conn, $_POST['permissions']);
	$isAdmin = mysqli_real_escape_string($conn, $_POST['isAdmin']);
	

    $sql = "INSERT INTO user (email,username,password,userId,permissions,adminRights) VALUES ('$email','$username','$password','$userId','$permissions','$isAdmin')";
    if (mysqli_query($conn, $sql)) {
		echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>