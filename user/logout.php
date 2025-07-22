<?php
include 'config.php';
$admin=new Admin();

session_destroy();
unset($_SESSION['uid']);
header('location:index.php');

?>