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