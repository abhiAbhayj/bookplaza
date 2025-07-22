<?php
include '../config.php';
$admin=new Admin();

$uid=$_GET['uid'];

$stmt=$admin->cud("DELETE FROM `user` WHERE `user_id`='$uid'","deleted");
echo "<script>alert('Deleted!');window.location='../viewusers.php';</script>";
?>
