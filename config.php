<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "photosite";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>