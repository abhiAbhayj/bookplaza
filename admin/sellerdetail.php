<?php
include 'config.php';
$admin = new Admin();

if(!isset($_SESSION['aid'])){
    header('location:login.php');
}
$slid = $_GET['slid'];

$stmt = $admin->ret("SELECT * FROM `seller` WHERE `seller_id`='$slid'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BookPlaza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-white"><i class="fa fa-book me-2"></i>BookPlaza</h3>
        </a>

        <div class="navbar-nav w-100" style="margin-top: 20px;">
            <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
           
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>Manage Seller</a>
                <div class="dropdown-menu bg-transparent border-0">
                   
                    <a href="viewsellers.php" class="dropdown-item">View Seller</a>
                  
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Manage Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                <a href="viewusers.php" class="dropdown-item">View Public Users</a>
    
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-tasks" aria-hidden="true"></i>Manage Report</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="viewreports.php" class="dropdown-item">View Report</a>
                  
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i>Manage Category</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="viewcategories.php" class="dropdown-item">Add Categories</a>
                  
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-comments" aria-hidden="true"></i>Manage Feedback</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="viewfeedbacks.php" class="dropdown-item">View Feedback</a>
                  
                </div>
            </div>
           
        </div>
    </nav>
</div>
<!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            <?php
            include 'navbar.php';
            ?>
            <!-- Table Start -->
            <div class="container-fluid py-5">
                <div class="row px-xl-5">
                    <div>
                        <h1 class="font-weight-semi-bold" style="text-align: center;"><?php echo $row['seller_name'] ?></h1>
                    </div>

                    <div style="display: flex;margin-top:30px">
                        <div class="col-lg-5 pb-5">
                            <div id="product-carousel">
                                <div class="carousel-inner border">
                                    <div>
                                        <img class="" src="../seller/controller/<?php echo $row['seller_image'] ?>" alt="Image" style="width:400px;height:350px">
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div class="col-lg-7">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" value="<?php echo $row['seller_name'] ?>" readonly class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" readonly value="<?php echo $row['seller_email'] ?>" class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="tel" name="phone" readonly value="<?php echo $row['seller_pno'] ?>" class="form-control" style="background-color: #eee;" pattern="[0-9]{10}" title="Please Enter Valid Number" required>

                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">State</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="state" readonly value="<?php echo $row['seller_state'] ?>" class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">City</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="city" readonly value="<?php echo $row['seller_city'] ?>" class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Pincode</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="pincode" readonly value="<?php echo $row['pincode'] ?>" maxlength="6" class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" readonly value="<?php echo $row['seller_add'] ?>" class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">About</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="about" readonly value="<?php echo $row['seller_about'] ?>" class="form-control" style="background-color: #eee;" required>

                                        </div>
                                    </div>
                                    <hr>


                                </div>
                            </div>

                            <div>



                            </div>
                        </div>


                    </div>

                    <div class="col-lg-12 pb-5" >
                        <div id="product-carousel">
                            <div class="carousel-inner border">
                                <div style="display: flex;gap:20px">
                                    <div>
                                        <h4 style="text-align: center;">Legal Certificate<h2>
                                                <img  src="../seller/controller/<?php echo $row['cert_img'] ?>" alt="Image" style="width:460px">
                                    </div>
                                    <div>
                                        <h4 style="text-align: center;">Uploaded Document<h2>
                                                <img src="../seller/controller/<?php echo $row['seller_doc'] ?>" alt="Image">
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div>
                        <h3>Do you want to remove the seller? <a href="controller/deleteseller.php?sid=<?php echo $row['seller_id'] ?>" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure?')"><i class="fa fa-check"></i></a></td>
                    </div>
                </div>

            </div>
            <!-- Table End -->
            <!-- Footer start -->
            <div class="container-fluid bg-secondary rounded-top p-4" style="padding: 10px 10px 0px 10px; bottom: 0;">
        <div class="row" style="margin-bottom: auto;">
            <div class="col-12 col-sm-6 text-center text-sm-start">
             &copy; <a href="#">BookPlaza</a>, All Right Reserved. 
            </div>
         </div>
    </div>
    <!-- Footer end -->
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>