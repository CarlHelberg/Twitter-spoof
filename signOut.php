<?php
header ("location:index.php");

session_start();
$_SESSION['loggedIn'] = NO;
session_destroy();


?>
