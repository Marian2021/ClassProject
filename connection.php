<?php
session_start();
$db = new mysqli_connect('localhost', 'root', '', 'photoSite');
#can be changed to have variables to allow for connection objects to be created for multiple users

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>