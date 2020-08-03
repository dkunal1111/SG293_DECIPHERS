<?php 
session_start();
session_destroy();
$d=base64_encode($_SESSION['s_id']);

header("location:supervisor_login.php?msg=$d");

?>
