
<?php   
include 'db_connection.php';   ?>
<?php

if (isset($_POST['submit'])) {
    
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);


    function validate_phone_number($phone){
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);

        // Check the length of phone number
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 12) {
            return false;
        } else {
        return true;
        }
    }

    
    // To hash the passwords
    $pass = trim(password_hash($password, PASSWORD_BCRYPT));

    $emailquery = " select * from users where email='$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    // To check email already exits in the database
    if ($emailcount>0) {
        ?><script> alert(" Email id already exits   please use a different Email id");</script>
        <?php
    }else{
        // To validate phone number
        if (validate_phone_number($phone_number) == true) {
        
            // Check for password
            if(trim(strlen($password)) > 8){

                if (trim($password) === trim($confirm_password)) {
                
                    $insertquery = "insert into users(user_name, email, phone_number, password) values('$user_name','$email','$phone_number','$pass') ";
        
                    $iquery =  mysqli_query($con, $insertquery);
                    
                    if ($iquery) {
                        ?> <script> alert("Registered Successful"); </script>

                        <!-- To redirect to home or index page  -->
                    <script> location.replace("login.php");</script>
                        <?php
                    }else{
                        ?><script> alert(" NO Connection");</script><?php
                    }
                    
                }else{
                    ?><script> alert(" Passwords are not matching..");
                    </script><?php
                }
            }else{
                ?><script> alert("Password cannot be less than 8 characters"); </script><?php 
            }
        } else {
        ?><script> alert("Please enter a valid phone number"); </script><?php
        }
    }
        

}
mysqli_close($con);
?>


<!DOCTYPE html>
    <html>


    <head>
    <meta charset="utf-8">
    <title>Interiorr | Signup / Login</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/nouislider.css" rel="stylesheet">
    <link href="css/nouislider.pips.css" rel="stylesheet">
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

        <!-- -- Main Header -->
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
            

<!--signup Section-->
<section class="register-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- to leave the space -->
            <div class="column spec-column col-md-6 col-sm-6 col-sm-12 col-xs-6">
                <img src="images/background/bg-01.png"  alt="">
                </div>
            
            <!--Form Column-->
            <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
            
                <div class="sec-title medium">
                    <h2>Signup Here</h2>
                </div>
                
                <!--Sign Up Form-->
                <div class="styled-form login-form">
                    <form method="post" action="#" name="signupForm" onsubmit="return validateSignupForm()">
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-user"></span></span>
                            <input type="text" name="user_name"  placeholder="Your Name *" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                            <input type="email" name="email"  placeholder="Enter Mail id *" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-phone"></span></span>
                            <input type="text" name="phone_number"  placeholder="Enter phone number *" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="password"  placeholder="Enter Password" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                            <input type="password" name="confirm_password"  placeholder="Confirm the Password" autocomplete="off" required>
                        </div>
                        <div class="clearfix">
                            <div class="pull-left">
                                Already have an account <a href="login.php">Login </a> here.
                            </div>
                            <div class="form-group pull-right">
                            <input type="submit"class="theme-btn btn-style-two" name="submit" value="Sign Up" />
                            </div>
                            
                        </div>
                        
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>


    </div>
    <!--End pagewrapper-->



    <script src="js/jquery.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/nouislider.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/validate.js"></script>
    </body>


    </html>