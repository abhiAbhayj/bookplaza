<?php
include 'config.php';
$admin=new Admin();
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
    include'topbar.php';
    ?>
    <!-- Topbar End -->
    

    <!-- Navbar Start -->
    <?php
    include'navbar.php';
    ?>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Products</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">3-Days Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    <!-- Vendor Start -->
    <div class="col-lg-14 col-md-12">
                <div class="row pb-3">
                <div class="owl-carousel vendor-carousel">
                    <?php
                    $stmt = $admin->ret("SELECT * FROM `book`");
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div >
                        <!-- class="col-lg-4 col-md-6 col-sm-12 pb-1" -->
                            <div >
                            <!-- class="card product-item border-0 mb-4" -->
                                <div>
                                <!-- class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" -->
                                 <a href="viewbookdetails.php?bookid=<?php echo $row['book_id'] ?>&slid=<?php echo $row['seller_id'] ?>">   <img height="300px" width="200px" style="padding: 10px 10px 10px 10px;" src="../seller/controller/<?php echo $row['book_img'] ?>" alt=""></a>
                                 <!-- class="img-fluid w-100" -->
                                </div>
                                <div class="card-body border-left border-right text-center  p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3"><?php echo $row['book_title'] ?></h6>
                                    
                                </div>
                                
                            </div>
                        </div>

                    <?php }
                    ?>
                </div>
                </div>
            </div>
    <!-- Vendor End -->
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