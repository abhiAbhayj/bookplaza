<?php
include '../config.php';
$admin=new Admin();

$cid=$_GET['cid'];

$stmt=$admin->cud("DELETE FROM `cart` WHERE `cart_id`='$cid'","deleted");
echo "<script>window.location='../cart.php';</script>";
?>