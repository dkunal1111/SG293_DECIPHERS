<?php 
session_start();
session_destroy();
$d=base64_encode($_SESSION['user']);

header("location:user_login.php?msg=$d");

?>