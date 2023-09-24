<!-- logout.php -->
<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Clear cookies
setcookie('PHPSESSID', '', time() - 3600, '/');
setcookie('token', '', time() - 3600, '/');

// Redirect to the login page
header("Location: login.php");
exit();
?>
