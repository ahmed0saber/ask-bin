<?php 

session_start();
session_destroy(); //clear session data

header("Location: login.php"); //back to login page

?>