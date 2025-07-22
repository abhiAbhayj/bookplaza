<?php
include '../config.php';
$admin=new Admin();

$cat_id=$_GET['cat_id'];

$stmt=$admin->cud("DELETE FROM `category` WHERE `cat_id`='$cat_id'","deleted");
echo "<script>window.location='../viewcategories.php';</script>";
?>
