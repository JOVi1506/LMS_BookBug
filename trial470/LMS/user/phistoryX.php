<?php
session_start();
include('db.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOOK BUG</title>
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

    <style>
        .table-container {
            margin: 0 auto; /* This will center the container */
        width: 95%; /* You can adjust the width as needed */
        }

        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #ffd333;
        color: #3d464d;
        }
    </style>
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
                        <button id="PP" class="dropdown-item" type="button">Past Purchases</button>
                        <button id="AR" class="dropdown-item" type="button">Active Rents</button>
                        <button id="PR" class="dropdown-item" type="button">Past Rents</button>
                        <button id="L" class="dropdown-item" type="button">Logout</button>
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
    var PPx = document.getElementById("PP");
    var ARx = document.getElementById("AR");
    var PRx = document.getElementById("PR");
    var Lx = document.getElementById("L");

    // Function to redirect to sign in URL
    PPx.addEventListener("click", function() {
        window.location.href = "http://localhost/trial470/LMS/user/phistoryX.php";
    });

    // Function to redirect to sign up URL
    ARx.addEventListener("click", function() {
        window.location.href = "http://localhost/trial470/LMS/user/rActiveUX.php";
    });

    // Function to redirect to sign in URL
    PRx.addEventListener("click", function() {
        window.location.href = "http://localhost/trial470/LMS/user/rhistoryUX.php";
    });

    // Function to redirect to sign up URL
    Lx.addEventListener("click", function() {
        window.location.href = "http://localhost/trial470/LMS/user/logoutX.php";
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
                            <a href="indexUX.php" class="nav-item nav-link">Home</a>
                            <a href="http://localhost/trial470/LMS/user/store1G.php" class="nav-item nav-link">Store</a>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Breadcrumb Start -->

        <div class="row px-xl-5">
            <div class="col-2">
                <nav class="mb-30">
                    <h5>PAST PURCHASES</h5>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
	<div class="table-container">			 
        <table id="customers">
            <thead>
                <tr>
                    <th>Purchase Date</th>
                    <th>Invoice Number</th>
                    <th>ISBN</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ('db.php');
                    $sql="select inv_no, ISBN, prod_name, price, p_date from sales_history where cus_id ='".$_SESSION['user']."'";
                    $re = mysqli_query($con,$sql);
                    if(mysqli_num_rows($re)>0)
                    {
                        while($row = mysqli_fetch_assoc($re))
                        {
                            echo"<tr class='gradeC'>
                            <td>".$row['p_date']."</td>
                            <td>".$row['inv_no']."</td>
                            <td>".$row['ISBN']."</td>
                            <td>".$row['prod_name']."</td>
                            <td>".$row['price']."</td>
                            </tr>";
                        }    
                    }
                ?>
                
            </tbody>
        </table>        
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5" style="position: fixed; bottom: 0; width: 100%;">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Store Location</h5>
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
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assetsX/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assetsX/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assetsX/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assetsX/js/dataTables/jquery.dataTables.js"></script>
    <script src="assetsX/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
                
            });
    </script>
         <!-- Custom Js -->
    <script src="assetsX/js/custom-scripts.js"></script>
    
    
   
</body>

</html>