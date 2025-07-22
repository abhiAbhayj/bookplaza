<?php
include 'config.php';
$admin = new Admin();

$sid = $_SESSION['sid'];
$stmt = $admin->ret("SELECT * FROM `seller` WHERE seller_id='$sid'");
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
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
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
                <img class="rounded-circle" src="../seller/controller/<?php echo $row1['seller_image']  ?>" alt="" style="width: 60px; height: 60px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo $row1['seller_name']  ?></h6>


            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>Manage Profile</a>
                <div class="dropdown-menu bg-transparent border-0">

                    <a href="viewprofile.php" class="dropdown-item">View Profile</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-book"></i> Manage Books</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="addbooks.php" class="dropdown-item">Add Books</a>
                    <a href="viewbooks.php" class="dropdown-item">View Books</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
            <!-- Profile -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">


                            <div class="row d-flex">
                                <div class="col col-lg-12 mb-4 mb-lg-0">
                                    <div style="border-radius: .5rem;">
                                        <h3>Your Profile</h3>
                                        <section style="background-color: #eee;">
                                            <div class="container py-5">

                                <form action="controller/editprofile.php" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card " style="height: 400px;">
                                                            <div class="card-body text-center">
                                                                <img src="controller/<?php echo $row['seller_image'] ?>" alt="avatar" class="rounded-circle img-fluid user-photo" style="width: 180px;height:180px">
                                                                <h5 class="my-3"></h5>
                                                                <p class="text-muted mb-1"></p>
                                                                <p class="text-muted mb-4"></p>
                                                                <div>
                                                                    <h6 class="text-dark">Update Image</h6>
                                                                    <input type="file" name="imgg" class="form-control" onchange="previewImage(event)" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card mb-4">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Name</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="name" value="<?php echo $row['seller_name'] ?>" class="form-control" style="background-color: #eee;"  minlength="4" required>

                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Email</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" name="email" value="<?php echo $row['seller_email'] ?>" class="form-control" style="background-color: #eee;" required>

                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Phone</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="tel" name="phone" value="<?php echo $row['seller_pno'] ?>" class="form-control" style="background-color: #eee;" pattern="[0-9]{10}" title="Please Enter Valid Number" required>

                                                                    </div>
                                                                </div>

                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">State</p>
                                                                    </div>
                                                                    <div class="col-md-6 form-group">
                                                                    <select name="state" id="StateId" required class="form-control select-arrow-cust widget_input" onchange="GetChildByMachineKey(this.value,'CityId');" data-label="Select state *" data-none-selected-text="Select State">
                                                                        <option value="" selected="selected">Select state *</option>
                                                                        <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                                        <option value="Assam">Assam</option>
                                                                        <option value="Bihar">Bihar</option>
                                                                        <option value="Chandigarh">Chandigarh</option>
                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                        <option value="Dadra And Nagar Haveli">Dadra And Nagar Haveli</option>
                                                                        <option value="Daman And Diu">Daman And Diu</option>
                                                                        <option value="Delhi">Delhi</option>
                                                                        <option value="Goa">Goa</option>
                                                                        <option value="Gujarat">Gujarat</option>
                                                                        <option value="Haryana">Haryana</option>
                                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                        <option value="Karnataka">Karnataka</option>
                                                                        <option value="Kerala">Kerala</option>
                                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                        <option value="Manipur">Manipur</option>
                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                        <option value="Mizoram">Mizoram</option>
                                                                        <option value="Nagaland">Nagaland</option>
                                                                        <option value="Odisha">Odisha</option>
                                                                        <option value="Puducherry">Puducherry</option>
                                                                        <option value="Punjab">Punjab</option>
                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                        <option value="Sikkim">Sikkim</option>
                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                        <option value="Telangana">Telangana</option>
                                                                        <option value="Tripura">Tripura</option>
                                                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                                        <option value="West Bengal">West Bengal</option>
                                                                    </select>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">City</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="city" value="<?php echo $row['seller_city'] ?>" class="form-control" style="background-color: #eee;" required>

                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Pincode</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="number" name="pincode" value="<?php echo $row['pincode'] ?>"  minlength="6" maxlength="6" class="form-control" style="background-color: #eee;" required>

                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Address</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="address" value="<?php echo $row['seller_add'] ?>" class="form-control" style="background-color: #eee;"  minlength="8" required>

                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">About</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="about" value="<?php echo $row['seller_about'] ?>" class="form-control" style="background-color: #eee;" required>

                                                                    </div>
                                                                </div>
                                                                <hr>
                                                               
                                                                <div class="row">
                                                                    <div class="d-flex justify-content-center mb-2">
                                                                        <button type="submit" name="edit" class="btn btn-outline-primary ms-1"><i class="fa fa-pen"></i> Update Profile</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>

                                                           

                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>



                            <!-- end profile -->
                        <!-- Footer -->
                            <div class="container-fluid pt-4 px-4" style="padding: 10px 10px 0px 10px; bottom: 0;">
                            <div class="bg-secondary rounded-top p-4">
                            <div class="row" style="margin-bottom: auto;">
                                <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#">BookPlaza</a>, All Right Reserved. 
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Footer -->
                        </div>
                        <!-- Content End -->
                        <!-- Back to Top -->
                        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
                    </div>


                    <script>
                        function previewImage(event) {
                            var reader = new FileReader();
                            reader.onload = function() {
                                var output = document.querySelector('.user-photo');
                                output.src = reader.result;
                            }
                            reader.readAsDataURL(event.target.files[0]);
                        }

                       
                    </script>
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