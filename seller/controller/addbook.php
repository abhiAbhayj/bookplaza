<?php
include '../config.php';
$admin=new Admin();

$sid=$_SESSION['sid'];

if(isset($_POST['addbook'])){
    $cat=$_POST['cat'];
    $cat2=$_POST['cat2'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $description=$_POST['description'];
    $isbn=$_POST['isbn'];
    $price=$_POST['price'];
    $publication=$_POST['publication'];
    $yearofpub=$_POST['yearofpub'];
    $quantity=$_POST['quantity'];
    
    $target="upload/";
    $image=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$image);


    $stmt=$admin->cud("INSERT INTO `book`(`cat_id`,`cat2_id`,`seller_id`,`book_title`,`book_author`,`book_description`,`book_isbn`,`book_price`,`publication`,`yearofpub`,`book_qty`,`book_img`,`book_date`)VALUES('$cat','$cat2','$sid','$title', '$author','$description','$isbn','$price','$publication','$yearofpub','$quantity','$image',now())","saved");
    echo "<script>window.location='../addbooks.php';</script>";
}

?>