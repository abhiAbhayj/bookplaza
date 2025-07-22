<?php
include 'config.php';
$admin = new Admin();

if(isset($_GET['usid'])){
    $usid = $_GET['usid'];
}

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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">View Used Book Details</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <!-- <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p> -->
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
       
        <div class="row px-xl-5 d-flex justify-content-center" style="margin-top:70px;">
            <div class="col-lg-12 mb-5">
               

                <div class="col-lg-14 col-md-12">
                    <div class="text-center mb-4">
                        <h2 class="section-title px-5"><span class="px-2">View Added Book Details.</span></h2>

                    </div>

                    <div class="row pb-3">
                        <?php
                        $stmt = $admin->ret("SELECT * FROM `usedbook` WHERE `user_id`='$usid' ORDER BY `ubook_id` DESC");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div>
                                <!-- class="col-lg-4 col-md-6 col-sm-12 pb-1" -->
                                <div>
                                    <!-- class="card product-item border-0 mb-4" -->
                                    <div>
                                        <!-- class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" -->
                                        <a href="viewusedbookdetails.php?ubookid=<?php echo $row['ubook_id'] ?>&uid=<?php echo $uid ?>"> <img height="300px" width="200px" style="padding: 10px 10px 10px 10px;" src="controller/<?php echo $row['ubook_img'] ?>" alt=""></a>
                                        <!-- class="img-fluid w-100" -->
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3"><?php echo $row['ubook_title'] ?></h6>

                                    </div>

                                </div>
                            </div>

                        <?php }
                        ?>
                    </div>


                    <!-- <div>
                    <table class="table table-striped">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>
                                    Slno
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div> -->
                </div>
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