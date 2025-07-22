<?php
include 'config.php';
$admin=new Admin();

$uid=$_SESSION['uid'];

$stmt=$admin->ret("SELECT * FROM `user` WHERE `user_id`='$uid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookPlaza</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top fit">
            <div style="width:2346px">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0" style="margin-left: 430px;">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="seller.php" class="nav-item nav-link">Seller</a>
                        <?php
                        if (!isset($_SESSION['uid'])) { ?>
                            <a href="userlogin.php" class="nav-item nav-link">Used Book Sellers</a>
                        <?php } else { ?>
                            <a href="publicseller.php" class="nav-item nav-link">Used Book Sellers</a>
                        <?php } ?> 
                        <?php
                        if (!isset($_SESSION['uid'])) { ?>
                            <a href="userlogin.php" class="nav-item nav-link">Profile</a>
                            <a href="userlogin.php" class="nav-item nav-link">Cart</a>


                        <?php } else { ?>
                            <a href="profile.php" class="nav-item nav-link active">Profile</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cart</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <?php
                                    $uid = $_SESSION['uid'];
                                    $stmt14 = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid' AND `type`='new'");
                                    $new = $stmt14->rowCount();

                                    $stmt15 = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid' AND `type`='used'");
                                    $used = $stmt15->rowCount();

                                    ?>
                                    <a href="cart.php" class="dropdown-item">New Book Cart <span class="badge badge-primary"><?php echo $new ?></span></a>
                                    <a href="usedcart.php" class="dropdown-item">Used Book Cart <span class="badge badge-primary"><?php echo $used ?></span></a>
                                </div>
                            </div>
                        <?php }
                        ?>



                    </div>
                    <?php
                    if (!isset($_SESSION['uid'])) { ?>
                        <div class="nav-item dropdown" style="margin-right: 100px;">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu rounded-0 m-0" >

                                <a href="userlogin.php" class="dropdown-item">User Login</a>
                                <a href="../seller/sellerrlogin.php" class="dropdown-item">Seller Login</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>

                    <?php   }
                    ?>

                </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    
            <section class="vh-120" >
                <div class="container py-5 h-120">
                    <div class="row d-flex justify-content-center align-items-center h-120">
                        <div class="col col-lg-8 mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background-color: #D19C97; ">
                                        <img src="controller/<?php echo $row['user_img'] ?>" alt="Avatar" class="img-fluid my-5 user-photo" style="width: 250px;height:190px;object-fit:cover" />
                                       
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h6>Update profile</h6>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-10 mb-3">
                                                   <form action="controller/editprofile.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <h6>Name</h6>
                                                        <input type="text" name="name" id="" value="<?php echo $row['user_name'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <h6>Email Address</h6>
                                                        <input type="email" name="email" id="" value="<?php echo $row['user_email'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <h6>Phone Number</h6>
                                                        <input type="tel" name="phone" id="" value="<?php echo $row['user_pno'] ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <h6>Change profile photo</h6>
                                                        <input type="file" name="img" id=""  class="form-control" onchange="previewImage(event)">
                                                    </div>

                                                    <button class="btn btn-primary px-3" name="edit" type="submit">Update Profile</button>
                                                   </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>






            <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.querySelector('.user-photo');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
            <!-- MDB -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>


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