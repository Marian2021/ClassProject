<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photosite";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>