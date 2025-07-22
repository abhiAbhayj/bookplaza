<?php
include 'config.php';
$admin = new Admin();
$uid = $_SESSION['uid'];

$unid = $_GET['unid'];
$odid = $_GET['odid'];
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
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">View All Order Details.</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h3 class="section-title px-5"><span class="px-2">View Ordered Books.</span></h3>
            <!-- <p>Add used book details.</p> -->
        </div>
        <div class="row px-xl-5 d-flex justify-content-center" style="margin-top:70px;">
            <div class="col-lg-12 mb-5">
                <table class="table table-striped">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>Slno</th>
                            <th>Image</th>
                            <th>Book Title</th>
                            <th>Book Author</th>
                            <th>ISBN</th>
                            <th>Publisher</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `order` INNER JOIN `usedbook` ON usedbook.ubook_id=order.book_id WHERE `publicseller_id`='$uid' AND `unid`='$unid'");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr class="text-dark">
                                <td>
                                    <?php echo $count++ ?>
                                </td>
                                <td>
                                    <img src="controller/<?php echo $row['ubook_img'] ?>" class="" alt="" style="width: 170px;height:200px">
                                </td>
                                <td>
                                    <?php echo $row['ubook_title'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ubook_author'] ?>
                                </td>
                                <td>
                                    <?php echo $row['ubook_isbn'] ?>
                                </td>
                                <td>
                                    <?php echo $row['upublication'] ?>
                                </td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h3 class="section-title px-5"><span class="px-2">View shipping Details.</span></h3>
            <!-- <p>Add used book details.</p> -->
        </div>
        <div class="row px-xl-5 d-flex justify-content-center" style="margin-top:70px;">
            <div class="col-lg-12 mb-5">
                <table class="table table-striped">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>Slno</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Zip Code</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `shipping`  WHERE `unid`='$unid' GROUP BY `unid`");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr class="text-dark">
                                <td>
                                    <?php echo $count++ ?>
                                </td>
                               
                                <td>
                                    <?php echo $row['shp_fname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['shp_lname'] ?>
                                </td>
                                <td>
                                    <?php echo $row['shp_phone'] ?>
                                </td>
                                <td>
                                    <?php echo $row['shp_email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['shp_add'] ?>
                                </td>
                                <td>
                                    <?php echo $row['shp_zipcode'] ?>
                                </td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h3 class="section-title px-5"><span class="px-2">View Payment Details.</span></h3>
            <!-- <p>Add used book details.</p> -->
        </div>
        <div class="row px-xl-5 d-flex justify-content-center" style="margin-top:70px;">
            <div class="col-lg-12 mb-5">
                <table class="table table-striped">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>Slno</th>
                            <th>Pay Method</th>
                            
                            <th>Paid Amount</th>
                            <th>Pay Status</th>
                            <th>Date</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $stmt = $admin->ret("SELECT * FROM `payment`  WHERE `od_id`='$odid'");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr class="text-dark">
                                <td>
                                    <?php echo $count++ ?>
                                </td>
                               
                                <td>
                                    <?php echo $row['pay_method'] ?>
                                </td>
                               
                                <td>
                                   ₹ <?php echo $row['pay_amt'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pay_status'] ?>
                                </td>
                                <td>
                                    <?php echo $row['pay_date'] ?>
                                </td>
                               
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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