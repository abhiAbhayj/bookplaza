<?php
include 'config.php';
$admin = new Admin();
$bookid = $_GET['bookid'];
$uid = $_GET['uid'];

$stmt = $admin->ret("SELECT * FROM `usedbook` WHERE `ubook_id`='$bookid'");
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Used Book Details</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Used Book Details</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Detail Start -->
    <div>
        <div class="row px-xl-5" style="padding: 50px;">
            <div>
                <img style="margin-right: 100px;" height="400px" width="400px" src="controller/<?php echo $row['ubook_img'] ?>" alt="Image">
            </div>
            <div class="col-lg-7 pb-5">

                <h3 class="font-weight-semi-bold"><?php echo $row['ubook_title'] ?></h3>

                <h3 class="font-weight-semi-bold mb-4">₹<?php echo $row['ubook_price'] ?></h3>
                <p class="mb-4">Author: <?php echo $row['ubook_author'] ?></p>
                <p class="mb-4">Description: <?php echo $row['ubook_description'] ?></p>
                <p class="mb-4">Publication: <?php echo $row['upublication'] ?></p>
                <p class="mb-4">Year of Publication: <?php echo $row['uyearofpub'] ?></p>
                <p class="mb-4">Available books: <?php echo $row['ubook_qty'] ?></p>

                <div>
                </div>
               

            </div>
        </div>

        <!-- <div style="padding:20px">
            <div>
                <h2>Write down your feedback.</h2>
            </div>
            <div>
                <form action="controller/feedback.php" method="POST">
                    <input type="hidden" name="slid" value="<?php echo $slid ?>" id="">
                    <input type="hidden" name="uid" value="<?php echo $uid ?>" id="">
                    <input type="hidden" name="bookid" value="<?php echo $ubookid ?>" id="">
                    <div class="form-group">
                        <textarea name="feed" id="" cols="30" rows="4" style="width:600px" placeholder="Write....." class="form-control" required></textarea>
                    </div>
                    <div>
                        <button name="send" type="submit" class="btn btn-primary px-3">Submit</button>
                    </div>
                </form>
            </div>



            <div style="margin-top: 80px;">
                <h3>What our customers says...</h3>

                <div style="background: white;height:400px;padding:20px;overflow:auto">
                    <div>
                        <?php

                        $stmt3 = $admin->ret("SELECT * FROM `feedback` INNER JOIN `user` ON user.user_id=feedback.user_id WHERE feedback.book_id='$bookid' ORDER BY `fb_id` DESC");
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
        </div> -->

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