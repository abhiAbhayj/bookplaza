<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['send'])){
    $slid=$_POST['slid'];
    $bookid=$_POST['bookid'];
    $feed=$_POST['feed'];


    $stmt=$admin->cud("INSERT INTO `feedback`(`seller_id`,`book_id`,`user_id`,`feed`,`fb_date`)VALUES('$slid','$bookid','$uid','$feed',now())","saved");
    echo "<script>window.location='../viewbookdetails.php?bookid=$bookid&slid=$slid';</script>";
}


?>