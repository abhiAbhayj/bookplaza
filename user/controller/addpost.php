<?php
include '../config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

if(isset($_POST['addbook'])){
    $cat=$_POST['cat'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $description=$_POST['about'];
    $isbn=$_POST['isbn'];
    $price=$_POST['price'];
    $publication=$_POST['publisher'];
    $yearofpub=$_POST['year'];
    $quantity=$_POST['qty'];
    

    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);


    $stmt=$admin->cud("INSERT INTO `usedbook`(`cat_id`,`user_id`,`ubook_title`,`ubook_author`,`ubook_description`,`ubook_isbn`,`ubook_price`,`upublication`,`uyearofpub`,`ubook_qty`,`ubook_img`,`ubook_date`)VALUES('$cat','$uid','$title', '$author','$description','$isbn','$price','$publication','$yearofpub','$quantity','$image',now())","saved");
    echo "<script>window.location='../viewusedbooks.php';</script>";
}

?>