<?php 
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
    header("location:user/indexX.php");  
 }  
?>
<!DOCTYPE html>
<html >
<head>
   <title>MultiShop - Online Shop Website Template</title>
   <meta charset="UTF-8">

   
   <link rel="stylesheet" href="css/lrDecor.css"> 

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
        #login h6 {
            text-align: left;
            padding-left: 460px;
        }
    </style>
</head>
<body>
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
    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-0">
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
    <div>
    <div class="container-fluid">
        <h2 class="text-center mt-2 mb-0">Sign up as a New User</h2>
    </div>
    <div class="container">
        <div id="login" class="text-center">
            <form method="post" class="mx-auto">
            <fieldset class="clearfix">
                <h6 class="mt-2 mb-0">User ID</h6>
                <p><span class="fontawesome-user"></span><input type="text"  name="ID" value="" onBlur="if(this.value == '') this.value = 'User ID Number'" onFocus="if(this.value == 'User ID Number') this.value = ''" required></p> 
                <h6 class="mt-2 mb-0">First Name</h6>
                <p><span class="fontawesome-user"></span><input type="text"  name="f_name" value="" onBlur="if(this.value == '') this.value = 'First Name'" onFocus="if(this.value == 'First Name') this.value = ''" required></p> 
                <h6 class="mt-2 mb-0">Last Name</h6>
                <p><span class="fontawesome-user"></span><input type="text"  name="l_name" value="" onBlur="if(this.value == '') this.value = 'Last Name'" onFocus="if(this.value == 'Last Name') this.value = ''" required></p> 
                <h6 class="mt-2 mb-0">Phone Number</h6>
                <p><span class="fontawesome-user"></span><input type="text" name="phone"  value="" onBlur="if(this.value == '') this.value = 'Phone Number'" onFocus="if(this.value == 'Phone Number') this.value = ''" required></p>
                <h6 class="mt-2 mb-0">Email</h6>
                <p><span class="fontawesome-user"></span><input type="text"  name="email" value="" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> 
                <h6 class="mt-2 mb-0">Address</h6>
                <p><span class="fontawesome-user"></span><input type="text"  name="adr" value="" onBlur="if(this.value == '') this.value = 'Address'" onFocus="if(this.value == 'Address') this.value = ''" required></p> 
                <h6 class="mt-2 mb-0">Password</h6>
                <p><span class="fontawesome-lock"></span><input type="password"  name="pass" value="" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p>  
                <p><input type="submit" name="sub" class="btn btn-primary" value="Confirm Sign Up"></p>
            </fieldset>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['sub'])){
        $con=mysqli_connect("localhost","root","","library");
        $newUser="INSERT INTO user (ID,f_name,l_name,phone,email,adr,pass) VALUES ('$_POST[ID]','$_POST[f_name]','$_POST[l_name]','$_POST[phone]','$_POST[email]','$_POST[adr]','$_POST[pass]')";
        if (mysqli_query($con,$newUser))
        {
            echo "<script type='text/javascript'> alert('Sign Up Complete!')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('An Unexpected Error Occurred!')</script>";
        }
    }
    ?>
</body>
</html>
