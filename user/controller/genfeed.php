<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['send'])){
 
    $genfeed=$_POST['genfeed'];


    $stmt=$admin->cud("INSERT INTO `genfeed`(`user_id`,`genfeed`,`genfeed_date`)VALUES('$uid','$genfeed',now())","saved");
    echo "<script>window.location='../index.php';</script>";
}

?>