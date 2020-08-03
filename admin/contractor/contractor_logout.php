<?php 
session_start();
session_destroy();
$d=base64_encode($_SESSION['c_id']);

header("location:contractor_login.php?msg=$d");

?>