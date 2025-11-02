<?php
    require 'db_connection.php';
    session_start();

    if (isset($_POST['submit'])) {

        $email =mysqli_real_escape_string($con,$_POST['email']);
        $password =mysqli_real_escape_string($con,$_POST['password']);

        $emailsearch = "select * from users where email='$email' ";
        $query = mysqli_query($con, $emailsearch);

        $emailcount = mysqli_num_rows($query);
        
        if ($emailcount) {
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['email'] = $email_pass['email'];
            $_SESSION['id'] = $email_pass['ID'];
            $_SESSION['name'] = $email_pass['user_name'];
            $_SESSION['phone_number'] = $email_pass['phone_number'];
            
            // --- THIS IS THE NEW LINE YOU ADDED ---
            $_SESSION['user_role'] = $email_pass['role'];
            // ------------------------------------------
            

            $pass_decode = password_verify($password, $db_pass);

            if (!$pass_decode) {
                $_SESSION['email'] = null;
                $_SESSION['id'] = null;
                ?>
                    <script> alert("password Incorrect");</script>
                <?php 
                
           }else{
    // Password is correct, now check the role

    if ($_SESSION['user_role'] == 'admin') {
        // User is an ADMIN
        ?>
        <script> 
            alert("Admin Login Successful!"); 
            location.replace("admin_panel.php");
        </script>
        <?php

    } else {
        // User is a regular USER
        ?>
        <script> 
            alert("Login Successful!"); 
            location.replace("index.php");
        </script>
        <?php
    }
}
        }else{
            $_SESSION['email'] = null;
            $_SESSION['id'] = null;
            ?>
                <script> alert("Invalid Emailid"); </script>
                <?php
        }
    }
?>


<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Interiorr | signup / Login</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/nouislider.css" rel="stylesheet">
<link href="css/nouislider.pips.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        
                        <!--Top Right-->
                        <div class="top-right pull-right">
                        
                            <!--social-icon-->
                            <div class="social-icon">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-dribbble"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                            
                            <ul>
                                <li><span class="fa fa-envelope-o"></span><a href="mailto:anshpuri520@gmail.com">anshpuri520@gmail.com</a></li>
                                <li><span class="fa fa-phone"></span><a href="tel:+919036644552">+91-9036644552</a>,<a href="tel:+919141167512">+91-9141167512</a></li>
                                <li><span class="fa fa-clock-o"></span>Mon - Fri : 9:00 -1700</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Header Top End -->
            
            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        
                                        <li ><a href="index.php">Home</a>
                                
                                            <li ><a href="about-us.php">About Us</a></li>

                                            <li ><a href="portfolio-fullwidth.php">Projects</a></li>
                                                    
                                            <li><a href="quotation.php">Free Quotation</a> </li>

                                            <li><a href="shop.php">Shop</a></li>
                                            
                                            <li><a href="contact.php">Contact</a></li>
                                            
                                            <?php
                                                require 'header.php';
                                            ?>
                        
                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                                        <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                                        </div><!-- / Hidden Nav Toggler -->
                                        
                        <!--End Main Header -->
                    </div>    
                </div>
            </div>
        </header> 
    
        <!--End Main Header -->

        
    <!-- Hidden Navigation Bar -->
        <section class="hidden-bar right-align">
            
            <div class="hidden-bar-closer">
                <button class="btn"><i class="fa fa-close"></i></button>
            </div>
            
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
            
                <!-- .logo -->
                <div class="logo text-center">
                    <a href="index.php"><img src="images/logo-2.png" alt=""></a>			
                </div><!-- /.logo -->
                
                <!-- .Side-menu -->
                <div class="side-menu">
                    <!-- .navigation -->
                    <ul class="navigation">
                        <li><a href="index.php">Home</a>
                                
                        <li><a href="about-us.php">About Us</a></li>

                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li><a href="quotation.php">Free Quotation</a> </li>

                        <li><a href="shop.php">Shop</a> </li>
                        
                        <li ><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    </ul>
            </div><!-- / Hidden Bar Wrapper -->
        </section>

        <!-- / Hidden Bar -->

        <!-- Login section -->
        <section class="register-section">
            <div class="auto-container ">
                <div class="row clearfix right-align">
                    
                
                    <!-- to leave the space -->
                    <div class="column spec-column col-md-6 col-sm-6 col-sm-12 col-xs-6">
                        <img src="images/background/bg-02.png"  alt="">
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column column col-lg-6 right-align  ">
                    
                        <div class="sec-title medium">
                            <h2>Login Now</h2>
                        </div>
                        
                        <!--Sign up Form-->
                        <div class="styled-form signup-form ">
                            <form method="post" action="#">
                                
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                    <input type="email" name="email" value="" placeholder="*Enter your Email id " autocomplete="o" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" name="password" value="" placeholder="*Enter your password" autocomplete="off" required>
                                </div>
                                <div class="clearfix">
                                    <div class="form-group pull-left">
                                    <input type="submit"class="theme-btn btn-style-two" name="submit" value="Login" />
                                    </div>
                                    <div class="form-group padd-top-10 pull-right">
                                        * You must be a free signuped user to submit content. <br>
                                        If not <style></style> <a href="signup.php">Register</a> here.*
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>

    </div>



<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>


</html>