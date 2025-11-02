<?php
    session_start();
    require 'db_connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Order Confirmed' where user_id='$user_id'";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));  
    }
    
    $_SESSION['counter'] =null;
    
?>



<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>INTERIORR - Design Studio  | About Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
                            <li><span class="fa fa-envelope-o"></span><a href="mailto:gagankumar8711@gmail.com">interiorrsuport@gmail.com</a></li>
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
                                
                                    <li><a href="about-us.php">About Us</a></li>

                                    <li ><a href="portfolio-fullwidth.php">Projects</a></li>
                                            
                                    <li ><a href="quotation.php">Free Quotation</a> </li>

                                    <li><a href="shop.php">Shop</a> </li>
                                    
                                    <li><a href="contact.php">Contact</a></li>

                                    <?php include 'header.php'; ?>
                    
                                    
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
                        
                        <li class="current"><a href="about-us.php">About Us</a></li>

                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li ><a href="quotation.php">Free Quotation</a> </li>

                        <li><a href="shop.php">Shop</a> </li>
                        
                        <li><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    

            </div><!-- / Hidden Bar Wrapper -->
        </section>

        <!-- / Hidden Bar -->
    

        <!--Page Title-->
    <section class="page-title " style="background-image:url(images/background/bg-page-title-1.jpg);" >
        <div class="auto-container">
            <h1>Your order is confirmed. Thank you for shopping with us. <a href="shopping-cart.php">Click here</a> to purchase any other item.</h1>
        </div>
    </section>
    
        <br><br><br><br><br><br><br>
</div><!-- footer -->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
        <div class="auto-container centered">
            <!--Footer Bottom-->
        <div class="footer-bottom centered">
            <div class="auto-container centered">
                <div class="clearfix">
                    <div class="pull-left"> All Copyrights are reserved INTERIORR 2021 <i class="fa fa-copyright" aria-hidden="true"></i> </div>
                </div>
            </div>
        </div>
    </footer>
    
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>


</html>