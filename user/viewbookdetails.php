<?php
include 'config.php';
$admin = new Admin();



$bookid = $_GET['bookid'];
$slid = $_GET['slid'];
$stmt = $admin->ret("SELECT * FROM `book` inner join `category` on book.cat_id= category.cat_id WHERE `book_id`='$bookid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 250px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Book Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Book Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Detail Start -->
    <div>
        <div class="row px-xl-5">
            <div>
                <img style="margin-right: 100px;" height="430px" width="290px" src="../seller/controller/<?php echo $row['book_img'] ?>" alt="Image">
            </div>
            <div class="col-lg-7 pb-5">

                <h3 class="font-weight-semi-bold"><?php echo $row['book_title'] ?></h3>

                <h3 class="font-weight-semi-bold mb-4">₹<?php echo $row['book_price'] ?></h3>
                <p class="mb-4">Author: <?php echo $row['book_author'] ?></p>
                <p class="mb-4">Genre: <?php echo $row['cat_name'] ?></p>
                <p class="mb-4">Description: <?php echo $row['book_description'] ?></p>
                <p class="mb-4">Publication: <?php echo $row['publication'] ?></p>
                <p class="mb-4">Year of Publication: <?php echo $row['yearofpub'] ?></p>
                <p class="mb-4">Available books: <?php echo $row['book_qty'] ?></p>


                <?php
                    $stmt2 = $admin->ret("SELECT * FROM `seller` WHERE `seller_id`='$slid'");
                    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                <p class="mb-4">Sold by: <?php echo $row2['seller_name'] ?></p>

                <?php }
                    ?>
                <div class="d-flex align-items-center mb-4 pt-2">

                    <form action="controller/addtocart.php" method="POST">
                        <input type="hidden" name="bookid" value="<?php echo $row['book_id'] ?>">
                        <input type="hidden" name="cqty" value="1">

                        <?php
                        if (!isset($_SESSION['uid'])) { ?>
                            <a href="userlogin.php" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</a>
                            <?php } else {
                            if ($row['book_qty'] == 0) {  ?>
                                <a class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Out of stock</a>
                            <?php  } else { ?>
                                <button class="btn btn-primary px-3" type="submit" name="addtocart"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                            <?php }
                            ?>


                        <?php   }
                        ?>

                    </form>

                </div>

            </div>
        </div>

        <div style="padding:20px">
            <div>
                <h2>Write down your feedback.</h2>
            </div>
            <div>
                <form action="controller/feedback.php" method="POST">
                    <input type="hidden" name="slid" value="<?php echo $slid ?>" id="">
                    <input type="hidden" name="uid" value="<?php echo $uid ?>" id="">
                    <input type="hidden" name="bookid" value="<?php echo $bookid ?>" id="">
                    <div class="form-group">
                        <textarea name="feed" id="" cols="30" rows="4" style="width:600px" placeholder="Write....." class="form-control" minlength="4" required></textarea>
                    </div>
                    <div>

                        <?php
                        if (!isset($_SESSION['uid'])) { ?>
                            <a href="userlogin.php" class="btn btn-primary px-3">Submit</a>
                        <?php } else { ?>
                            <button name="send" type="submit" class="btn btn-primary px-3">Submit</button>
                        <?php   }
                        ?>


                    </div>
                </form>
            </div>



            <div style="margin-top: 80px;">
                <h3>What our customers says...</h3>

                <div style="background: white;height:400px;padding:20px;overflow:auto">
                    <div>
                        <?php

                        $stmt3 = $admin->ret("SELECT * FROM `feedback` INNER JOIN `user` ON user.user_id=feedback.user_id WHERE feedback.book_id='$bookid'");
                        while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div style="display:flex;gap:10px">
                                <img src="controller/<?php echo $row3['user_img'] ?>" alt="" style="width:50px;height:50px;border-radius:100px">
                                <div style="display:flex;flex-direction:column">
                                    <h6 style="margin-top: 7px;"><b><?php echo $row3['user_name'] ?></b></h6>
                                    <p><?php echo $row3['fb_date'] ?></p>
                                </div>
                            </div>
                            <div style="padding:20px">
                                <p><?php echo $row3['feed'] ?></p>
                            </div>



                        <?php }
                        ?>

                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Shop Detail End -->




    <!-- Footer Start -->
    <?php
    include 'footer.php';
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