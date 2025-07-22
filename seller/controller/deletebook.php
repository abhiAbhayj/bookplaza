<?php
include '../config.php';
$admin=new Admin();

$bookid=$_GET['bookid'];

$stmt=$admin->cud("DELETE FROM `book` WHERE `book_id`='$bookid'","deleted");
echo "<script>alert('Deleted!!');window.location='../viewbooks.php';</script>";
?>