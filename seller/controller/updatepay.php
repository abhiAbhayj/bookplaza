<?php
include '../config.php';
$admin=new Admin();


$payid=$_GET['payid'];
$unid = $_GET['unid'];
$odid = $_GET['odid'];

$stmt=$admin->cud("UPDATE `payment` SET `pay_status`='paid' WHERE `pay_id`='$payid'","updated");
echo "<script>window.location='../viewallorders.php?unid=$unid&odid=$odid';</script>";
?>