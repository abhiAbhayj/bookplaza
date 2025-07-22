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
                        <!-- <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1> -->
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="seller.php" class="nav-item nav-link">Seller</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">My Orders</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="userlogin.php" class="dropdown-item">Login as a User</a>
                                <a href="sellerrlogin.php" class="dropdown-item">Login as a Seller</a>
                            </div>
                        </div>
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
    $stmt4 = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid'");
    $num = $stmt4->rowCount();

    if ($num > 0) {
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
                            $total = 0;
                            $gtotal = 0;
                            $stmt9 = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid'");
                            while ($row9 = $stmt9->fetch(PDO::FETCH_ASSOC)) {


                                if ($row9['type'] == 'used') {
                                    $stmt10 = $admin->ret("SELECT * FROM `cart`  INNER JOIN `usedbook` ON usedbook.ubook_id=cart.ubook_id WHERE cart.user_id='$uid' AND `type`='used'");
                                    while ($row10 = $stmt10->fetch(PDO::FETCH_ASSOC)) {
                                        $cqty = $row10['cart_qty'];
                                        $bprice = $row10['ubook_price'];
                                        $total = $bprice * $cqty;
                                        $gtotal = $gtotal + $total;
                            ?>
                                        <tr>
                                            <td class="align-middle"><img src="controller/<?php echo $row10['ubook_img'] ?>" alt="" style="width: 160px;"> </td>


                                            <td class="align-middle">₹<?php echo $row10['ubook_price'] ?></td>
                                            <td>
                                                <div class="col" style="display: flex;margin-top:100px">
                                                    <button class="btn btn-sm btn-primary" onclick="decrement(<?php echo $row10['cart_id'] ?>)">-</button>

                                                    <input type="text" id="<?php echo $row10['cart_id'] ?>" value="<?php echo $row10['cart_qty'] ?>" name="quantity" readonly style="width: 50px;">
                                                    <button class="btn btn-sm btn-primary" onclick="increment(<?php echo $row10['ubook_qty'] ?>,<?php echo $row10['cart_id'] ?>)">+</button>
                                                </div>
                                            </td>
                                            <td class="align-middle">₹<?php echo $total ?></td>
                                            <td class="align-middle"><a href="controller/deletecart.php?cid=<?php echo $row10['cart_id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    <?php }
                                } else   
                      if ($row9['type'] == 'new') {
                                    $stmt10 = $admin->ret("SELECT * FROM `cart`  INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid' AND `type`='new'");
                                    while ($row10 = $stmt10->fetch(PDO::FETCH_ASSOC)) {
                                        $cqty = $row10['cart_qty'];
                                        $bprice = $row10['book_price'];
                                        $total = $bprice * $cqty;
                                        $gtotal = $gtotal + $total;
                                    ?>
                                        <tr>
                                            <td class="align-middle"><img src="seller/controller/<?php echo $row10['book_img'] ?>" alt="" style="width: 160px;"> </td>


                                            <td class="align-middle">₹<?php echo $row10['book_price'] ?></td>
                                            <td>
                                                <div class="col" style="display: flex;margin-top:100px">
                                                    <button class="btn btn-sm btn-primary" onclick="decrement(<?php echo $row10['cart_id'] ?>)">-</button>

                                                    <input type="text" id="<?php echo $row10['cart_id'] ?>" value="<?php echo $row10['cart_qty'] ?>" name="quantity" readonly style="width: 50px;">
                                                    <button class="btn btn-sm btn-primary" onclick="increment(<?php echo $row10['book_qty'] ?>,<?php echo $row10['cart_id'] ?>)">+</button>
                                                </div>
                                            </td>
                                            <td class="align-middle">₹<?php echo $total ?></td>
                                            <td class="align-middle"><a href="controller/deletecart.php?cid=<?php echo $row10['cart_id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                                        </tr>
                            <?php }
                                }
                            } ?>

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
                            $total1 = 0;
                            $gtotal1 = 0;
                            $stmt2 = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid'");
                            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {


                                if ($row2['type'] == 'used') {
                                    $stmt6 = $admin->ret("SELECT * FROM `cart`  INNER JOIN `usedbook` ON usedbook.ubook_id=cart.ubook_id WHERE cart.user_id='$uid' AND `type`='used'");
                                    while ($row6 = $stmt6->fetch(PDO::FETCH_ASSOC)) {
                                        $cqty2 = $row6['cart_qty'];
                                        $bprice2 = $row6['ubook_price'];
                                        $total1 = $bprice2 * $cqty2;
                                        $gtotal1 = $gtotal1 + $total1;
                            ?>

                                        <div class="d-flex justify-content-between mb-3 pt-1">
                                            <h6 class="font-weight-medium"><?php echo $row6['ubook_title'] ?></h6>
                                            <h6 class="font-weight-medium">x<?php echo $row6['cart_qty'] ?></h6>
                                            <h6 class="font-weight-medium">₹<?php echo $total1 ?></h6>
                                        </div>
                                    <?php }
                                } else {
                                    $total2 = 0;
                                    $gtotal2 = 0;
                                    $stmt6 = $admin->ret("SELECT * FROM `cart`  INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid' AND `type`='new'");
                                    while ($row6 = $stmt6->fetch(PDO::FETCH_ASSOC)) {
                                        $cqty2 = $row6['cart_qty'];
                                        $bprice2 = $row6['book_price'];
                                        $total2 = $bprice2 * $cqty2;
                                        $gtotal2 = $gtotal2 + $total2;
                                    ?>

                                        <div class="d-flex justify-content-between mb-3 pt-1">
                                            <h6 class="font-weight-medium"><?php echo $row6['book_title'] ?></h6>
                                            <h6 class="font-weight-medium">x<?php echo $row6['cart_qty'] ?></h6>
                                            <h6 class="font-weight-medium">₹<?php echo $total2 ?></h6>
                                        </div>
                            <?php }
                                }
                            } ?>

                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>


                                <?php
                                $stmt8 = $admin->ret("SELECT * FROM `cart` WHERE `user_id`='$uid'");
                                while ($row8 = $stmt8->fetch(PDO::FETCH_ASSOC)) {
                                    if ($row8['type'] == 'new') { ?>
                                        <h5 class="font-weight-bold">₹<?php echo $gtotal2 ?></h5>
                                    <?php } else if ($row8['type'] == 'used') { ?>
                                        <h5 class="font-weight-bold">₹<?php echo $gtotal1 ?></h5>
                                    <?php } else if ($row8['type'] == 'used' && $row8['type'] == 'new') { ?>
                                        <h5 class="font-weight-bold">₹<?php echo $gtotal2 + $gtotal1 ?></h5>
                                    <?php }
                                    ?>

                                <?php } ?>
                                
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