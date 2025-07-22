<?php
include '../config.php';
$admin=new Admin();

$sid=$_GET['sid'];

$stmt=$admin->cud("DELETE FROM `seller` WHERE `seller_id`='$sid'","deleted");
echo "<script>alert('Deleted!');window.location='../viewsellers.php';</script>";
?>
