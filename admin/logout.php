<?php
include 'config.php';
$admin=new Admin();

session_destroy();
unset($_SESSION['aid']);
header('location:login.php');

?>