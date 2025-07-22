<?php
include 'config.php';
$admin = new Admin();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BookPlaza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php
    include 'topbar.php';
    ?>
    <!-- Topbar End -->
    


    <!-- Navbar Start -->
    <?php 
 include 'navbar2.php';
 ?>
    <!-- Navbar End -->

            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <br>
                <br>
                
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-14 col-md-12">
                <div>
                    <?php

                    if(isset($_POST['search'])){
                        $book=$_POST['book'];
                    
                    $stmt = $admin->ret("SELECT * FROM `book` WHERE `book_title` LIKE '%$book%'");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                        $slid=$row['seller_id'];
                        ?>
                        <div class="row px-xl-5">
            <div>
            <a href="viewbookdetails.php?bookid=<?php echo $row['book_id'] ?>&slid=<?php echo $slid ?>">   <img height="300px" width="200px" style="padding: 10px 10px 10px 10px;" src="../seller/controller/<?php echo $row['book_img'] ?>" alt="Image"></a>
            </div>
            <div class="col-lg-7 pb-5">

                <h3 class="font-weight-semi-bold"><?php echo $row['book_title'] ?></h3>

                <h3 class="font-weight-semi-bold mb-4">₹<?php echo $row['book_price'] ?></h3>
                <p class="mb-4">Author: <?php echo $row['book_author'] ?></p>
            </div>
        </div>

                    <?php } } else if(isset($_GET['catid'])) { 
                        $cat=$_GET['catid'];
                    
                    $stmt = $admin->ret("SELECT * FROM `book` WHERE `cat_id`='$cat'");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                        $slid=$row['seller_id'];
                        ?>
                        
                        <div class="row px-xl-5">
            <div>
            <a href="viewbookdetails.php?bookid=<?php echo $row['book_id'] ?>&slid=<?php echo $slid ?>">   <img height="300px" width="200px" style="padding: 10px 10px 10px 10px;" src="../seller/controller/<?php echo $row['book_img'] ?>" alt="Image"></a>
            </div>
            <div class="col-lg-7 pb-5">

                <h3 class="font-weight-semi-bold"><?php echo $row['book_title'] ?></h3>

                <h3 class="font-weight-semi-bold mb-4">₹<?php echo $row['book_price'] ?></h3>
                <p class="mb-4">Author: <?php echo $row['book_author'] ?></p>
            </div>
        </div>
                        <?php } } else { ?>

                       
                        <h3>No such boook</h3>
                 <?php    }
                    ?>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div> 
    <!-- Shop End -->


    <!-- Footer Start -->
    <?php
    include'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>