<?php
include 'config.php';
$admin=new Admin();
if(!isset($_SESSION['sid'])){
    header('location:sellerrlogin.php');
}
$sid=$_SESSION['sid'];
$stmt1=$admin->ret("SELECT * FROM `seller` WHERE seller_id='$sid'");
 $row1=$stmt1->fetch(PDO::FETCH_ASSOC);
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
        <?php

$admin = new Admin();

$sid = $_SESSION['sid'];
$stmt1 = $admin->ret("SELECT * FROM `seller` WHERE seller_id='$sid'");
$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
?>
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-white"><i class="fa fa-book me-2"></i>BookPlaza</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <a href="viewprofile.php"><img class="rounded-circle" src="../seller/controller/<?php echo $row1['seller_image']  ?>" alt="" style="width: 60px; height: 60px;"></a>
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo $row1['seller_name']  ?></h6>


            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book"></i> Manage Books</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="addbooks.php" class="dropdown-item">Add Books</a>
                    <a href="viewbooks.php" class="dropdown-item">View Books</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Manage Orders</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="vieworders.php" class="dropdown-item">View Orders</a>

                </div>
            </div>
           
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-tasks"></i>Manage Report</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="viewreports.php" class="dropdown-item">View Report</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-comments"></i>Manage Feedback</a>
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
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">View Orders</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Slno</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col">View All</th>
                                            <th scope="col">Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $count=1;
                                        $stmt=$admin->ret("SELECT * FROM `order` INNER JOIN `user` ON user.user_id=order.user_id  WHERE order.seller_id='$sid' GROUP BY `unid`");
                                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                                         <tr class="text-white">
                                         <td scope="row"><?php echo $count++ ?></td>
                                            <td><?php echo $row['user_name'] ?></td>
                                            <td><?php echo $row['user_pno'] ?></td>
                                            <td><?php echo $row['user_email'] ?></td>
                                            <td>
                                                <a href="viewallorders.php?unid=<?php echo $row['unid'] ?>&odid=<?php echo $row['od_id'] ?>"><i class="fa fa-eye" style="font-size: 20px;margin-left:20px;color:green"></i></a>
                                            </td>
                                            <td><?php echo $row['od_date'] ?></td>

                                        </tr>
                                      <?php  }
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
            <?php
      include 'footer.php';
      ?>
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