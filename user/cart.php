<?php
include 'config.php';
$admin = new Admin();
$uid = $_SESSION['uid'];
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
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Cart</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <?php
$stmt4=$admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid'");
$num=$stmt4->rowCount();

if($num>0){


    ?>
    <div class="container-fluid pt-5" id="tablecart">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        $total=0;
                        $gtotal=0;
                        $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid'");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                            $cqty=$row['cart_qty'];
                            $bprice=$row['book_price'];
                            $total=$bprice*$cqty;
                            $gtotal=$gtotal+$total;
                            ?>
                            <tr>
                                <td class="align-middle"><img src="../seller/controller/<?php echo $row['book_img'] ?>" alt="" style="width: 160px;"> </td>
                                
                                <td class="align-middle">₹<?php echo $row['book_price'] ?></td>
                                <td >
                                    <div class="col" style="display: flex;margin-top:100px">
                                        <button class="btn btn-sm btn-primary" onclick="decrement(<?php echo $row['cart_id'] ?>)">-</button>

                                        <input type="text" id="<?php echo $row['cart_id'] ?>" value="<?php echo $row['cart_qty'] ?>" name="quantity" readonly style="width: 50px;">
                                        <button class="btn btn-sm btn-primary" onclick="increment(<?php echo $row['book_qty'] ?>,<?php echo $row['cart_id'] ?>)">+</button>
                                    </div>
                                </td>
                                <td class="align-middle">₹<?php echo $total ?></td>
                                <td class="align-middle"><a href="controller/deletecart.php?cid=<?php echo $row['cart_id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                            </tr>
                        <?php }
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                    <?php
                        $total2=0;
                        $gtotal2=0;
                        $stmt2 = $admin->ret("SELECT * FROM `cart` INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid'");
                        while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { 
                            $cqty2=$row2['cart_qty'];
                            $bprice2=$row2['book_price'];
                            $total2=$bprice2*$cqty2;
                            $gtotal2=$gtotal2+$total2;
                            ?>
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium"><?php echo $row2['book_title'] ?></h6>
                            <h6 class="font-weight-medium">x<?php echo $row2['cart_qty'] ?></h6>
                            <h6 class="font-weight-medium">₹<?php echo $total2 ?></h6>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₹<?php echo $gtotal2 ?></h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
<h3 style="color:red;text-align:center">Your cart is empty!!</h3>
    <?php } ?>
    <!-- Cart End -->


    <!-- Footer Start -->
    <?php
    include 'footer.php';
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script>
        function increment(stock, cartid) {


            var qty = document.getElementById(cartid).value;
            qty = parseInt(qty) + 1;

            if (qty > stock) {

                alert('out of stock');
            } else {
                document.getElementById(cartid).value = qty;
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("tablecart").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "controller/updatecart.php?cartid=" + cartid + '&qty=' + qty, true);
                xmlhttp.send();

            }

        }

        function decrement(cartid) {

            var qty = document.getElementById(cartid).value;
            qty = parseInt(qty) - 1;
            if (qty > 0) {

                document.getElementById(cartid).value = qty;
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById("tablecart").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "controller/updatecart.php?cartid=" + cartid + '&qty=' + qty, true);
                xmlhttp.send();

            }

        }
    </script>
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