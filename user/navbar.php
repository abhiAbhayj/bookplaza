<div class="container-fluid mb-5">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: absolute">
                    <?php
                    $stmt13 = $admin->ret("SELECT * FROM `category`");
                    while ($row13 = $stmt13->fetch(PDO::FETCH_ASSOC)) { ?>
                        <a href="viewsearchbook.php?catid=<?php echo $row13['cat_id'] ?>" class="nav-item nav-link"><?php echo $row13['cat_name'] ?></a>
                    <?php  }
                    ?>


                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">BookPlaza</h1>
                    <!-- <span class="text-primary font-weight-bold border px-3 mr-1">E</span> -->
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
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
                            <a href="profile.php" class="nav-item nav-link">Profile</a>

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
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu rounded-0 m-0">

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
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="img/bookb 1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4"></h3>
                                <!-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="img/bookb 2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4"></h3>
                                <!-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="img/bookb 3.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                <h3 class="display-4 text-white font-weight-semi-bold mb-4"></h3>
                                <!-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-prev-icon mb-n2"></span>
                    </div>
                </a>
                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                    <div class="btn btn-dark" style="width: 45px; height: 45px;">
                        <span class="carousel-control-next-icon mb-n2"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>