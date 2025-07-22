<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $photo=basename($_FILES['img']['name']);

    $target = "upload/";
    $image = $target . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $image);

    if(empty($photo)){
        $stmt=$admin->ret("SELECT * FROM `user` WHERE `user_id`='$uid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $stmt=$admin->cud("UPDATE `user` SET `user_name`='$name',`user_pno`='$phone',`user_email`='$email' WHERE `user_id`='$uid'","updated");
        echo "<script>window.location='../profile.php';</script>";

    } else {
        $stmt=$admin->cud("UPDATE `user` SET `user_name`='$name',`user_pno`='$phone',`user_email`='$email',`user_img`='$image' WHERE `user_id`='$uid'","updated");
        echo "<script>window.location='../profile.php';</script>";
    }

 
}
?>