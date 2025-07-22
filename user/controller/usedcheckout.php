<?php
include '../config.php';
$admin = new Admin();
$uid = $_SESSION['uid'];

if (isset($_POST['usedbookcheckout'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
   
    $usid = $_POST['uid'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $paymethod = $_POST['payment_method'];
    $transaction = $_POST['transaction'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];

    $un = uniqid();

    $stmt = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid'");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
       
            $stmt2 = $admin->ret("SELECT * FROM `cart` INNER JOIN `userbook` ON userbook.ubook_id=cart.ubook_id INNER JOIN `user` ON user.user_id=cart.user_id WHERE user.user_id='$uid'");
            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                $bookid = $row2['ubook_id'];
                $cqty = $row2['cart_qty'];
                $bookprice = $row2['ubook_price'];
                $total = $cqty * $bookprice;

                $bookqty = $row['ubook_qty'];
                $remainingqty = $bookqty - $cqty;

                $stmt8 = $admin->cud("UPDATE `usedbook` SET `ubook_qty`='$remainingqty' WHERE `ubook_id`='$bookid'", "updated");

                $stmtOrder = $admin->Rcud("INSERT INTO `order`(`user_id`,`publicseller_id`,`book_id`,`qty`,`amt`,`od_status`,`unid`,`od_date`)VALUES('$uid','$usid','$bookid','$cqty','$total','ordered','$un',now())");

                if ($paymethod == 'cash') {
                    $stmt3 = $admin->cud("INSERT INTO `payment`(`od_id`,`pay_method`,`pay_amt`,`pay_status`,`pay_date`)VALUES('$stmtOrder','$paymethod','$total','pending',now())","saved");
                } else if ($paymethod == 'upi') {
                    $stmt3 = $admin->cud("INSERT INTO `payment`(`od_id`,`pay_method`,`pay_amt`,`trans_id`,`pay_status`,`pay_date`)VALUES('$stmtOrder','$paymethod','$total','$transaction','paid',now())","saved");
                } else if ($paymethod == 'card') {
                    $stmt3 = $admin->cud("INSERT INTO `payment`(`od_id`,`pay_method`,`pay_amt`,`card_name`,`card_num`,`pay_status`,`pay_date`)VALUES('$stmtOrder','$paymethod','$total','$cardname','$cardnumber','paid',now())","saved");
                }

                $stmt4 = $admin->cud("INSERT INTO `shipping`(`od_id`,`shp_fname`,`shp_lname`,`shp_email`,`shp_add`,`shp_state`,`shp_phone`,`shp_zipcode`,`unid`,`shp_date`)VALUES('$stmtOrder','$fname','$lname','$email','$address','$state','$phone','$zip','$un',now())","saved");

            
                $stmt5 = $admin->cud("DELETE FROM `cart` WHERE `user_id`='$uid' AND `type`='used'","deleted");
                echo "<script>window.location='../thankyou.php';</script>";
            }
       
    }
}

?>
