<?php
    session_start();
    include('db.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book Bug</title>
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
    
     <!-- Google Fonts-->
    
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
                            <a href="http://localhost/trial470/LMS/user/indexUX.php" class="nav-item nav-link">Home</a>
                            <a href="http://localhost/trial470/LMS/user/store1G.php" class="nav-item nav-link">Store</a>
                        </div>
                    
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->




    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="cp/front/3.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="cp/back/3.jpg" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                <div class="form-group">
                                                
                                                <?php
                                                    require('db.php');
                                                    $sql = "select title FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $title = $row['title'];
                                                        echo "<h3 class='font-weight-semi-bold mb-4'>$title</p>";
                                                    } 
                                                ?>
                                                    
                                                </div>

                        

                    <div class="form-group">
                                            
                                                <?php
                                                    require('db.php');
                                                    $sql = "select authors FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $authors = $row['authors'];
                                                        echo "<p class='oinfo'>By: $authors</p>";
                                                    } 
                                                ?>        
                                                </div>
                    <div class="form-group">
                                            
                                                <?php
                                                    require('db.php');
                                                    $sql = "select genre FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $genre = $row['genre'];
                                                        echo "<p class='oinfo'>Genre: $genre</p>";
                                                    } 
                                                ?>        
                                                </div>
                    <div class="form-group">
                                                
                                                <?php
                                                    require('db.php');
                                                    $sql = "select price FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $price = $row['price'];
                                                        echo "<h3 class='font-weight-semi-bold mb-4'>৳ $price</p>";
                                                    } 
                                                ?>
                                                    
                                                </div>    
                 
                    <div class="d-flex align-items-center mb-4 pt-2">

                        <button class='btn btn-primary px-3' data-toggle='modal' data-target='#rModal'><i class="fa fa-shopping-cart mr-1"></i> Rent</button>
                    </div>

                    <div class="d-flex align-items-center mb-4 pt-2">

                        <button class='btn btn-primary px-3' data-toggle='modal' data-target='#pModal'><i class="fa fa-shopping-cart mr-1"></i> Purchase</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab"
                            href="#tab-pane-1">Summary</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Specification</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Sypnosis</h4>
                            <p>"The Seven Husbands of Evelyn Hugo" by Taylor Jenkins Reid follows the enigmatic 
                                Evelyn Hugo, a legendary Hollywood actress,as she recounts her scandalous life to 
                                a young journalist. With seven marriages behind her, Hugo reveals the secrets, 
                                ambitions, and heartbreaks that shaped her career and personal life. Through her 
                                captivating narrative, the novel explores themes of love, identity, and the price 
                                of fame. It's a compelling tale of a woman who defied convention and pursued her 
                                desires in the cutthroat world of 1950s Hollywood."
                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                                
                                        <div class="panel-body">
                                        <form name="form" method="post">
                                                <div class="form-group">
                                                        <h6>Author(s) </h6>
                                                <?php
                                                    require('db.php');
                                                    $sql = "select authors FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $authors = $row['authors'];
                                                        echo "<p class='oinfo'>$authors</p>";
                                                    } 
                                                ?>        
                                                </div>
                                                <div class="form-group">
                                                        <h6>Genre</h6>
                                                <?php
                                                    require('db.php');
                                                    $sql = "select genre FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $genre = $row['genre'];
                                                        echo "<p class='oinfo'>$genre</p>";
                                                    } 
                                                ?>      
                                               </div>
                                                <div class="form-group">
                                                        <h6>ISBN</h6>
                                                <?php
                                                    require('db.php');
                                                    $sql = "select ISBN FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $ISBN = $row['ISBN'];
                                                        echo "<p class='oinfo'>$ISBN</p>";
                                                    } 
                                                ?>      
                                                </div>
                                                <div class="form-group">
                                                        <h6>Price (৳)</h6>
                                                <?php
                                                    require('db.php');
                                                    $sql = "select price FROM book WHERE idx = 3";
                                                    $rs = mysqli_query($con, $sql);
                                                    while($row = mysqli_fetch_assoc($rs))
                                                    {
                                                        $price = $row['price'];
                                                        echo "<p class='oinfo'>$price</p>";
                                                    } 
                                                ?>
                                                    
                                                </div>    
                                                 <div class="form-group"> 
                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->




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

<!-- /. PAGE WRAPPER  -->
</div>
<div class="panel-body">
                                <div class="modal fade" id="pModal" tabindex="-1" role="dialog" aria-labelledby="pmyModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="pmyModalLabel">Purchase Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <form method="post">
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Customer ID</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql = "select ID FROM user WHERE ID = '".$_SESSION['user']."'";
                                                        $rs = mysqli_query($con, $sql);
                                                        $ID = mysqli_fetch_assoc($rs)['ID'];
                                                        echo "<p class='sn'>$ID</p>";
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Customer First Name</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql = "select f_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                                        $rs = mysqli_query($con, $sql);
                                                        $f_name = mysqli_fetch_assoc($rs)['f_name'];
                                                        echo "<p class='sn'>$f_name</p>";
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Customer Last Name</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql = "select l_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                                        $rs = mysqli_query($con, $sql);
                                                        $l_name = mysqli_fetch_assoc($rs)['l_name'];
                                                        echo "<p class='sn'>$l_name</p>";
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Product Name</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql = "select title FROM book WHERE idx = 3";
                                                        $rs = mysqli_query($con, $sql);
                                                        $title = mysqli_fetch_assoc($rs)['title'];
                                                        echo "<p class='sn'>$title</p>";
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>ISBN</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql = "select ISBN FROM book WHERE idx = 3";
                                                        $rs = mysqli_query($con, $sql);
                                                        $ISBN = mysqli_fetch_assoc($rs)['ISBN'];
                                                        echo "<p class='sn'>$ISBN</p>";
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Product Price</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql = "select price FROM book WHERE idx = 3";
                                                        $rs = mysqli_query($con, $sql);
                                                        $price = mysqli_fetch_assoc($rs)['price'];
                                                        echo "<p class='sn'>$price</p>";
                                                    ?>
                                                    </div>
                                            </div>     
                                                                                   
                                                
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                
                                                <input type="submit" name="purchase" value="Confirm" class="btn btn-primary">
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            if(isset($_POST['purchase']))
                            {
                                require('db.php');
                                
                                $p_date = date("Y-m-d");

                                $sql = "select ID FROM user WHERE ID = '".$_SESSION['user']."'";
                                $rs = mysqli_query($con, $sql);
                                $ID = mysqli_fetch_assoc($rs)['ID'];

                                $sql2 = "select f_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                $rs2 = mysqli_query($con, $sql2);
                                $f_name = mysqli_fetch_assoc($rs2)['f_name'];
                                
                                $sql3 = "select l_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                $rs3 = mysqli_query($con, $sql3);
                                $l_name = mysqli_fetch_assoc($rs3)['l_name'];

                                $sql4 = "select ISBN FROM book WHERE idx = 3";
                                $rs4 = mysqli_query($con, $sql4);
                                $ISBN = mysqli_fetch_assoc($rs4)['ISBN'];

                                $sql5 = "select price FROM book WHERE idx = 3";
                                $rs5 = mysqli_query($con, $sql5);
                                $price = mysqli_fetch_assoc($rs5)['price'];

                                $sql6 = "select title FROM book WHERE idx = 3";
                                $rs6 = mysqli_query($con, $sql6);
                                $title = mysqli_fetch_assoc($rs6)['title'];

                                $sql12 = "select idx FROM book WHERE idx = 3";
                                $rs12 = mysqli_query($con, $sql12);
                                $idx = mysqli_fetch_assoc($rs12)['idx'];

                                $sql14 = "select authors FROM book WHERE idx = 3";
                                $rs14 = mysqli_query($con, $sql14);
                                $authors = mysqli_fetch_assoc($rs14)['authors'];

                                $sql15 = "select genre FROM book WHERE idx = 3";
                                $rs15 = mysqli_query($con, $sql15);
                                $genre = mysqli_fetch_assoc($rs15)['genre'];

                                $inssql = "INSERT INTO sales_history (cus_id, cus_f_name, cus_l_name, ISBN, prod_name, price, p_date, idx, authors, genre) VALUES ('$ID', '$f_name', '$l_name', '$ISBN', '$title', '$price', '$p_date', '$idx', '$authors', '$genre')";
                                mysqli_query($con,$inssql);
                
                                
                                
                            }
                            elseif(isset($_POST['rent']))
                            {
                                require('db.php');

                                $rent_date = date("Y-m-d");
                                $return_due = date("Y-m-d", strtotime($rent_date . "+1 week"));

                                $sql7 = "select ID FROM user WHERE ID = '".$_SESSION['user']."'";
                                $rs7 = mysqli_query($con, $sql7);
                                $ID = mysqli_fetch_assoc($rs7)['ID'];

                                $sql8 = "select f_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                $rs8 = mysqli_query($con, $sql8);
                                $f_name = mysqli_fetch_assoc($rs8)['f_name'];

                                $sql9 = "select l_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                $rs9 = mysqli_query($con, $sql9);
                                $l_name = mysqli_fetch_assoc($rs9)['l_name'];

                                $sql10 = "select ISBN FROM book WHERE idx = 3";
                                $rs10 = mysqli_query($con, $sql10);
                                $ISBN = mysqli_fetch_assoc($rs10)['ISBN'];

                                $sql11 = "select title FROM book WHERE idx = 3";
                                $rs11 = mysqli_query($con, $sql11);
                                $title = mysqli_fetch_assoc($rs11)['title'];
                                
                                $sql13 = "select idx FROM book WHERE idx = 3";
                                $rs13 = mysqli_query($con, $sql13);
                                $idx = mysqli_fetch_assoc($rs13)['idx'];

                                $sql16 = "select authors FROM book WHERE idx = 3";
                                $rs16 = mysqli_query($con, $sql16);
                                $authors = mysqli_fetch_assoc($rs16)['authors'];

                                $sql17 = "select genre FROM book WHERE idx = 3";
                                $rs17 = mysqli_query($con, $sql17);
                                $genre = mysqli_fetch_assoc($rs17)['genre'];

                                $inssql2 = "INSERT INTO rent_history (cus_id, cus_f_name, cus_l_name, ISBN, prod_name, rent_date, return_due, return_date, penalty, idx, authors, genre) VALUES ('$ID', '$f_name', '$l_name', '$ISBN', '$title', '$rent_date', '$return_due', 'Null', 'Null',$idx, '$authors', '$genre')";
                                mysqli_query($con,$inssql2);
                            }
                            ob_end_flush();
                            ?>
                            
                            
        
        <div class="panel-body">
                                <div class="modal fade" id="rModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">+
                                       
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="rmyModalLabel">Rent Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <form method="post">
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label></label>
                                                        <?php
                                                            require('db.php');
                                                            $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                            $rs0 = mysqli_query($con, $sql0);
                                                            $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                            if($cus_id!=Null)
                                                            {
                                                                echo "<p class='sn'>You have an active rental. Multiple book rentals are not allowed at once.</p>";
                                                            }
                                                        ?>    
                                                    </div>
                                            </div>     
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Customer ID</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $sql = "select ID FROM user WHERE ID = '".$_SESSION['user']."'";
                                                            $rs = mysqli_query($con, $sql);
                                                            $ID = mysqli_fetch_assoc($rs)['ID'];
                                                            echo "<p class='sn'>$ID</p>";
                                                        }    
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Customer First Name</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $sql = "select f_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                                            $rs = mysqli_query($con, $sql);
                                                            $f_name = mysqli_fetch_assoc($rs)['f_name'];
                                                            echo "<p class='sn'>$f_name</p>";
                                                        }    
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Customer Last Name</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $sql = "select l_name FROM user WHERE ID = '".$_SESSION['user']."'";
                                                            $rs = mysqli_query($con, $sql);
                                                            $l_name = mysqli_fetch_assoc($rs)['l_name'];
                                                            echo "<p class='sn'>$l_name</p>";
                                                        }
                                                    ?>
                                                    </div>
                                            </div>
                                                  
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Product Name</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $sql = "select title FROM book WHERE idx = 3";
                                                            $rs = mysqli_query($con, $sql);
                                                            $title = mysqli_fetch_assoc($rs)['title'];
                                                            echo "<p class='sn'>$title</p>";
                                                        } 
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>ISBN</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $sql = "select ISBN FROM book WHERE idx = 3";
                                                            $rs = mysqli_query($con, $sql);
                                                            $ISBN = mysqli_fetch_assoc($rs)['ISBN'];
                                                            echo "<p class='sn'>$ISBN</p>";
                                                        }
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Rent Date</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $rent_date = date("Y-m-d");
                                                            echo "<p class='sn'>$rent_date</p>";
                                                        }
                                                        
                                                    ?>
                                                    </div>
                                            </div>    
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                            <label>Return Due Date</label>
                                                    <?php
                                                        require('db.php');
                                                        $sql0 = "select cus_id from rent_history where cus_id='".$_SESSION['user']."' && return_date='0000-00-00'";
                                                        $rs0 = mysqli_query($con, $sql0);
                                                        $cus_id = isset(mysqli_fetch_assoc($rs0)['cus_id']);
                                                        if($cus_id!=Null)
                                                        {
                                                            echo "<p class='sn'>—</p>";
                                                        }
                                                        else
                                                        {
                                                            $rent_date = date("d M Y");
                                                            $return_due = date("Y-m-d", strtotime($rent_date . "+1 week"));
                                                            echo "<p class='sn'>$return_due</p>";
                                                        }
                                                    ?>
                                                    </div>
                                            </div>                                       
                                                
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                
                                                <input type="submit" name="rent" value="Confirm" class="btn btn-primary">
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                    
                    </div>          

        
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assetsY/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assetsY/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assetsY/js/jquery.metisMenu.js"></script>
    <!-- Custom Js -->
    <script src="assetsY/js/custom-scripts.js"></script>
    
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