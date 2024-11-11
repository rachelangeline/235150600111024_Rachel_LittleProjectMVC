<?php 

// session_start();

$_SESSION["coba"] = "admin";
$_SESSION["fullname"] = "Admin 1";
$_SESSION["loggedIn"] = true;
unset($_SESSION["coba"]);

session_destroy();

echo "username: " . $_SESSION["coba"];