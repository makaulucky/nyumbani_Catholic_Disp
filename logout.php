<?php
session_start();
//require_once '../class.user.php';
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
// redirect to login page
header("Location: login.php");
?>