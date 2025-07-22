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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

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
        <div id="spinner" class="show bg-black position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>BookPlaza</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                    <form action="controller/register.php" method="POST" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="floatingText" placeholder="Enter your Name" required>
                            <label for="floatingText">Name</label>
                        
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" name="phone" class="form-control" id="floatingText" placeholder="Enter your Phone no" pattern="[0-9]{10}" title="Please Enter Valid Number" required>
                            <label for="floatingText">Phone Number</label>
                        
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" name="desc" class="form-control" id="floatingText" placeholder="Enter Description" required></textarea>
                            <label for="floatingText">Shop Description</label>
                         
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" name="address" class="form-control" id="floatingText" placeholder="Enter your Address" required></textarea>
                            <label for="floatingText">Address</label>
                            
                        </div>
                        <div class="mb-3 ">
                        <!-- <label  for="floatingText">State</label> -->
                                <select name="state" id="floatingText" class="form-select mb-3" onchange="GetChildByMachineKey(this.value,'CityId');" data-label="Select state *" data-none-selected-text="Select State" required >
                                    <option value="" selected="selected">Select state </option>
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
                        <div class="form-floating mb-3">
                        <input type="text" name="city" class="form-control" id="floatingInput" placeholder="city" required>
                            <!-- <textarea type="text" name="city" class="form-control" id="floatingText" placeholder="City" required></textarea> -->
                            <label for="floatingText">City</label>
                           
                        </div>
                        <div class="form-floating mb-3">
                        <input type="number" name="pin" class="form-control" id="floatingInput" placeholder="Pin Code" minlength="6" maxlength="6" required>
                            <!-- <textarea type="number" name="pin" class="form-control" id="floatingText" placeholder="Pin Code" minlength="6" maxlength="6" required></textarea> -->
                            <label for="floatingText">Pin Code</label>
                           
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Enter your Email-ID" required>
                            <label for="floatingInput">Email address</label>
                          
                        </div>
                        <div>
                        <label for="floatingInput">Profile Photo</label>
                            <input type="file" name="img" class="form-control" id="floatingInput" placeholder="" required>
                            <br>
                        </div>
                        <div>
                        <label>Upload Certificate</label>
                            <input type="file" name="cert" class="form-control" id="floatingInput" required>
                            <br>
                        </div>
                        <div>
                        <label>Upload Government issued Identiy cards</label>
                            <input type="file" name="doc" class="form-control" id="floatingInput" required>
                            <br>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            <label for="floatingPassword">Password</label>
                            
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="conpassword" class="form-control" id="floatingPassword" placeholder="Re-Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                        </div>
                        <button type="submit" name="register" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="sellerrlogin.php">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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