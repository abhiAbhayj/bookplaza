<?php
include '../config.php';
$admin=new Admin();

$sid=$_SESSION['sid'];

if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $about=$_POST['about'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];

    $photo=basename($_FILES['imgg']['name']);
 

    $target = "upload/";
    $image = $target . basename($_FILES['imgg']['name']);
    move_uploaded_file($_FILES['imgg']['tmp_name'], $image);

 

    if(empty($photo)){
        $stmt=$admin->ret("SELECT * FROM `seller` WHERE `seller_id`='$sid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $stmt=$admin->cud("UPDATE `seller` SET `seller_name`='$name',`seller_pno`='$phone',`seller_email`='$email',`seller_about`='$about',`seller_add`='$address',`seller_city`='$city',`seller_state`='$state',`pincode`='$pincode' WHERE `seller_id`='$sid'","updated");
        echo "<script>window.location='../viewprofile.php';</script>";

    } else {
        $stmt=$admin->cud("UPDATE `seller` SET `seller_name`='$name',`seller_image`='$image',`seller_pno`='$phone',`seller_email`='$email',`seller_about`='$about',`seller_add`='$address',`seller_city`='$city',`seller_state`='$state',`pincode`='$pincode' WHERE `seller_id`='$sid'","updated");
        echo "<script>window.location='../viewprofile.php';</script>";
    }

 
}
?>