<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        $_SESSION['username'] = "";
        // Redirecting To Home Page
        header("Location: index.php");
    }
?>