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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Add used books</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Be a used book seller</span></h2>
            <p>Add used book details.</p>
        </div>
        <div class="row px-xl-5 d-flex justify-content-center" style="margin-top:70px;">
            <div class="col-lg-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="controller/addpost.php" method="post" enctype="multipart/form-data">
                        <!-- name="sentMessage" id="contactForm" novalidate="novalidate" -->
                        <div class="control-group">
                            <div style="display:flex;gap:20px">
                                <div>
                                    <h6>Select Category</h6>
                                    <select class="form-control" style="width:215px" id="name" name="cat" required>
                                        <option selected disabled hidden value="">Select Category</option>
                                        <?php
                                        $stmt = $admin->ret("SELECT * FROM `category`");
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <h6>Book Title</h6>
                                    <input type="text" class="form-control" id="name" name="title" placeholder="Book Title" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <h6>Book Author</h6>
                                    <input type="text" class="form-control" id="name" name="author" placeholder="Book Author" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <h6>Book Price</h6>
                                    <input type="number" class="form-control" id="name" name="price" placeholder="Book Price" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div style="display:flex;gap:20px">

                                <div>
                                    <h6>ISBN Number</h6>
                                    <input type="number" class="form-control" id="name" name="isbn" placeholder="ISBN Number" required="required" minlength="10" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <h6>Publisher</h6>
                                    <input type="text" class="form-control" id="name" name="publisher" placeholder="Publisher" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <h6>Year of publication</h6>
                                    <input type="date" class="form-control" id="name" name="year" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <h6>Quantity</h6>
                                    <input type="number" class="form-control" id="name" name="qty" placeholder="Quantity" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <h6>Upload Book Image</h6>
                            <input type="file" class="form-control" id="email" name="img" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <h6>Book Description</h6>
                            <textarea class="form-control" rows="4" id="message" name="about" placeholder="Description...." required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4 btn-block" type="submit" name="addbook" id="sendMessageButton">Add Book</button>
                        </div>
                    </form>
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