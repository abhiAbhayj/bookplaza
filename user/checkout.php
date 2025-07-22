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
    <?php
    include 'navbar2.php';
    ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <form action="controller/checkout.php" method="POST">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="fname" minlength="4" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="lname">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="email" name="email" placeholder="example@email.com"required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input type="tel" name="phone" id="Mobile" autocomplete="off" maxlength="10" class="form-control" pattern="[0-9]{10}" title="Please Enter Valid Number" required placeholder="Enter mobile number" value="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" name="address" placeholder="123 Street" minlength="8" required>
                            </div>


                            <div class="col-md-6 form-group">
                                <label>State</label>
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
                            <div class="col-md-6 form-group">
                                <label>PIN Code</label>
                                <input class="form-control" name="zip" type="number" minlength="6" maxlength="6" required placeholder="Enter Pincode" value="">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="font-weight-medium mb-3">Products</h5>
                            <?php
                            $total2 = 0;
                            $gtotal2 = 0;
                            $stmt2 = $admin->ret("SELECT * FROM `cart` INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid'");
                            while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                $cqty2 = $row2['cart_qty'];
                                $bprice2 = $row2['book_price'];
                                $total2 = $bprice2 * $cqty2;
                                $gtotal2 = $gtotal2 + $total2;
                            ?>

                                <input type="hidden" name="sellerid" value="<?php echo $row2['seller_id'] ?>">
                                <div class="d-flex justify-content-between">
                                    <p><?php echo $row2['book_title'] ?></p>
                                    <p>x<?php echo $row2['cart_qty'] ?></p>
                                    <p></p>₹<?php echo $total2 ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold">₹<?php echo $gtotal2 ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="card border-secondary mb-5">

                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Payment</h4>

                        </div>
                        <div class="card-body">


                            <div class="payment-methods">
                                <div class="Pement">


                                </div>
                                <div class="card-info pt-40 ">

                                    <div>
                                        <input type="radio" name="payment_method" value="cash" id="cash" onclick="cardform(this.value)" required>&nbsp;
                                        <label style="font-family: 'Open Sans', sans-serif;">Cash On Delivery</label>
                                    </div>



                                    <input type="radio" name="payment_method" value="upi" id="upi" onclick="cardform(this.value)" required>&nbsp;
                                    <label style="font-family: 'Open Sans', sans-serif;">UPI</label>
                                    <div style="display:none;" id="upi_div">

                                        <div class="Pement">
                                            <div class="form-box" style="display: flex;flex-direction:column">
                                                <label>Scan and Pay</label>
                                                <img src="controller/upload/qrcode.jpg " height="180px" width="180px">

                                            </div>
                                            <br>
                                            <div class="form-box" style="display: flex;flex-direction:column">
                                                <label>Trans / Id</label>
                                                <input type="text" name="transaction" placeholder="0000 0000 0000" id="trid" minlength="12" maxlength="12" class="form-control" style="width: 200px;" required>


                                            </div>
                                        </div>


                                    </div><br>

                                    <input type="radio" name="payment_method" value="card" id="card" onclick="cardform(this.value)" required title="Please Select">&nbsp;
                                    <label style="font-family: 'Open Sans', sans-serif;padding-bottom: 15px;">Debit Card / Credit Card</label><br>
                                    <div style="display:none;" id="card_div">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="cc-name">Name on card</label>
                                                <input type="text" class="form-control" id="cc-name" name="cardname" placeholder="" required>
                                                <small class="text-muted">Full name as displayed on card</small>
                                                <div class="invalid-feedback"> Name on card is required </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="cc-number">Card number</label>
                                                <input type="text" class="form-control" id="cc-number" name="cardnumber" maxlength="16" minlength="16" placeholder="" required>
                                                <div class="invalid-feedback"> Card number is required </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-expiration">Expiration</label>
                                                <input type="text" class="form-control" id="cc-expiration" name="expiry" placeholder="" required>
                                                <div class="invalid-feedback"> Expiration date required </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cc-cvv">CVV</label>
                                                <input type="text" class="form-control" id="cc-cvv" name="cvv" maxlength="3" minlength="3" placeholder="" required>
                                                <div class="invalid-feedback"> Security code required </div>
                                            </div>
                                        </div>




                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <button type="submit" name="checkout" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold">BookPlaza</h1>
                </a>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="index.php">BookPlaza</a>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <script>
        function cardform(myvalue) {

            if (myvalue == 'card') { //radio button id
                document.getElementById('card_div').style.display = 'block'; //div id
                document.getElementById('upi_div').style.display = 'none';
                // document.getElementById('cash_div').style.display = 'none';

                document.getElementById('trid').removeAttribute('required');
                document.getElementById('cc-name').setAttribute('required', '');
                document.getElementById('cc-number').setAttribute('required', '');
                document.getElementById('cc-expiration').setAttribute('required', '');
                document.getElementById('cc-cvv').setAttribute('required', '');



            } else if (myvalue == 'upi') {
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'block';
                // document.getElementById('cash_div').style.display = 'none';

                document.getElementById('trid').setAttribute('required', '');
                document.getElementById('cc-name').removeAttribute('required');
                document.getElementById('cc-number').removeAttribute('required');
                document.getElementById('cc-expiration').removeAttribute('required');
                document.getElementById('cc-cvv').removeAttribute('required');
            } else {
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'none';
                // document.getElementById('cash_div').style.display = 'block';

                document.getElementById('trid').removeAttribute('required');
                document.getElementById('cc-name').removeAttribute('required');
                document.getElementById('cc-number').removeAttribute('required');
                document.getElementById('cc-expiration').removeAttribute('required');
                document.getElementById('cc-cvv').removeAttribute('required');

            }

        }
    </script>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <!-- <script src="mail/jqBootstrapValidation.min.js"></script> -->
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>