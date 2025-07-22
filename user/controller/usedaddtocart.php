<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];
$bookid=$_POST['ubookid'];
$cartqty=$_POST['cqty'];

 $stmt = $admin->ret("SELECT * FROM `cart` WHERE `ubook_id`='$bookid' AND `user_id`='$uid'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $num = $stmt->rowCount();
    if($num>0){
        $updatedquant = 0;
        $dbqty =$row['cart_qty'];
        $updatedquant = $cartqty + $dbqty;
        $stmt1 = $admin->cud("UPDATE `cart` SET  `cart_qty` = '$updatedquant' WHERE `ubook_id` = '$bookid' AND `user_id` = '$uid'","updated");
        echo "<script>window.location='../usedcart.php';</script>";
     
    }else{
          
 $stmt2=$admin->cud("INSERT INTO `cart`(`ubook_id`,`user_id`,`cart_qty`,`type`,`cart_date`)VALUES('$bookid','$uid','$cartqty','used',now())","saved");
 echo "<script>window.location='../usedcart.php';</script>";

    }


?>