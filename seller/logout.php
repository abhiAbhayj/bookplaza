<?php
include 'config.php';
$admin=new Admin();

session_destroy();
unset($_SESSION['sid']);

header('location:sellerrlogin.php');
?>