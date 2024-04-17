<?php
include('db.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img1/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib1/animate/animate.min.css" rel="stylesheet">
    <link href="lib1/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/style.css" rel="stylesheet">
</head>

<body>

<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="btn-group">
                    <!-- Keep the dropdown buttons -->
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- Add IDs to the dropdown items -->
                        <button id="signin_btn" class="dropdown-item" type="button">Login</button>
                        <button id="signup_btn" class="dropdown-item" type="button">Register</button>
                    </div>
                </div>
                <div class="btn-group mx-2">

                </div>
                <div class="btn-group">

                </div>
            </div>
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Book</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Bug</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0"></p>
            <h5 class="m-0"></h5>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- JavaScript to handle button click redirection -->
<script>
    // Get references to the Sign in and Sign up buttons
    var signinBtn = document.getElementById("signin_btn");
    var signupBtn = document.getElementById("signup_btn");

    // Function to redirect to sign in URL
    signinBtn.addEventListener("click", function() {
        window.location.href = "http://localhost/trial470/LMS/user/userloginX.php";
    });

    // Function to redirect to sign up URL
    signupBtn.addEventListener("click", function() {
        window.location.href = "http://localhost/trial470/LMS/user/userregX.php";
    });
</script>



    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">

            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="http://localhost/trial470/LMS/indexX.php" class="nav-item nav-link">Home</a>
                            <a href="http://localhost/trial470/LMS/store1G.php" class="nav-item nav-link">Store</a>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-">



            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-8">
                <div class="row pb-4">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            
                            <div class="ml-2">
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/25.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 25";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/26.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 26";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/27.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 27";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/28.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 28";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/29.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 29";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/30.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 30";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/31.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 31";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/32.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 32";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/33.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 33";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/34.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 34";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="cp/front/35.jpg" alt="">
                            </div>
                            <div class="text-center py-4">
                            <div class="form-group">
                                <?php
                                $sql2 = "SELECT title,linkg,price FROM book where idx = 35";
                                $rs = mysqli_query($con, $sql2);
                                while($row = mysqli_fetch_assoc($rs))
                                {
                                    $title = $row['title'];
                                    $linkg = $row['linkg'];
                                    $price = $row['price'];
                                    echo "<a class='h6 text-decoration-none text-truncate' href='$linkg'>$title</a>";
                                    echo "<div class='d-flex align-items-center justify-content-center mt-2'><h5>৳ $price</h5></div>";
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="http://localhost/trial470/LMS/store2G.php">Previous</span></a></li>
                                <li class="page-item"><a class="page-link" href="http://localhost/trial470/LMS/store1G.php">1</a></li>
                                <li class="page-item"><a class="page-link" href="http://localhost/trial470/LMS/store2G.php">2</a></li>
                                <li class="page-item active"><a class="page-link" href="http://localhost/trial470/LMS/store3G.php">3</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Store Location</h5>
                <p class="mb-4"></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>221 Baker Street, London, UK </p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>support@bookbug.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+8801603890912</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"></h5>
                        
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"></h5>
                        
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4"></h5>
                        <p>
                        <form action="">
                            <div class="input-group">
                                
                               
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#"></a>All Rights Reserved 2024. 
                    <a class="text-primary" href="">Book Bug Corporation Pvt. Ltd.</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img1/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib1/easing/easing.min.js"></script>
    <script src="lib1/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail1/jqBootstrapValidation.min.js"></script>
    <script src="mail1/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js1/main.js"></script>
</body>

</html>