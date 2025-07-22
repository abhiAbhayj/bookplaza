<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['addcat'])){
    $cat=$_POST['cat'];

    $stmt2=$admin->ret("SELECT * FROM `category` WHERE `cat_name`='$cat'");
    $num=$stmt2->rowCount();
    if($num>0){
        echo "<script>alert('Category already exist!!');window.location='../viewcategories.php';</script>";
    } else {

    $stmt=$admin->cud("INSERT INTO `category`(`cat_name`,`cat_date`)VALUES('$cat',now())","saved");
    echo "<script>window.location='../viewcategories.php';</script>";
} 
} 

?>