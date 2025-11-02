<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "interior") or die("Connection Error: " . mysqli_error($con));

if (isset($_POST['send'])) {
    
    $subject= mysqli_real_escape_string($con,$_POST['subject']);
    $name= mysqli_real_escape_string($con,$_POST['full_name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $phone_number= mysqli_real_escape_string($con,$_POST['phone_number']);
    $message=mysqli_real_escape_string($con,$_POST['message']);

    function validate_phone_number($phone){
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);

        // Check the lenght of number
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            return false;
        } else {
        return true;
        }
    }


    if (validate_phone_number($phone_number) == true) {
        
        mysqli_query($con, "INSERT INTO contact_us (subject,name,email,phonenumber,message) VALUES ('" . $subject. "', '" . $name. "', '" . $email. "','" . $phone_number. "','" . $message. "')");

        $insert_id = mysqli_insert_id($con);

        if(!empty($insert_id)) {
            ?> <script> alert("Thank you for Contacting Us..! We will reach you in a short while.."); </script><?php
        }else{
            ?><script> alert(" Some thing went wrong...");</script><?php
        }
    } else {
        ?> <script> alert("Please enter a valid phone number"); </script><?php

    }
    
}
mysqli_close($con);
?>



<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Interiorr | Contact Us</title>
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
                                    
                                    <li class="current"><a href="contact.php">Contact</a></li>

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
                                
                        <li><a href="about-us.php">About Us</a></li>

                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li><a href="quotation.php">Free Quotation</a> </li>

                        <li><a href="shop.php">Shop</a> </li>
                        
                        <li class="current" ><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    </ul>
            </div><!-- / Hidden Bar Wrapper -->
        </section>

        <!-- / Hidden Bar -->


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>
    
    
    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column -->
                <div class="column form-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title medium"><h2>Send Message Us</h2></div>
                    <!--form-box-->
                    <div class="form-box default-form">
                        <div class="contact-form default-form">

                            <div class="row clearfix">
                                    <form method="POST" action="">

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="full_name"  placeholder="Your Name *" autocomplete="off" required>         
                                    </div>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email"  placeholder="Enter Mail id *" autocomplete="off" required>        
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone_number"  placeholder="Enter phone number *" autocomplete="off" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="subject">
                                            <option value="Casual Enquiry">Casual Enquiry</option>
                                            <option value="Product Details Enquiry">Product Details Enquiry</option>
                                            <option value="Interior Related">Interior Related</option>
                                            <option value="Others"> Others</option>
                                        </select>

                                        <!-- <input type="text" name="subject"  placeholder="Enter Subject *" autocomplete="off" required> -->
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Message / Feedback *" autocomplete="off" required ></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two" name="send">Contact</button>
                                    </div>
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column info-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title medium"><h2>Contact Details</h2></div>
                    <div class="desc-text">Project Interiorr is an ultimate guidebook to help you to create a personal and inspired home designed for actually living. Every space has its own purpose. Our task is to understand, see and implement it. So, contact us for more information on what we do.</div>
                    <div class="info-style-one">
                        <ul>
                            <li><div class="icon-box"></div><h4>Address :</h4><div class="text"><a href="https://goo.gl/maps/qjyK8MP14HFpF2kbA" >India,Maharashtra,Nashik</a></div></li> <br>
                            <li><div class="icon-box"></div><h4>Mail to Interiorr :</h4><div class="text"><a href="mailto:anshpuri520@gmail.com">anshpuri520@gmail.com</a></div></li> <br>
                            <li><div class="icon-box"></div><h4>Call Him:</h4><div class="text"><a href="tel:+919036644552">+91-9036644552</a>,<a href="tel:+919141167512">+91-9141167512</a></div></li> <br>
                        </ul>
                    </div>
                </div>
                
            </div>    
        </div>
    </section>
    
    
    <!--Map Section-->
   <section class="map-section">
    <div class="map-outer">
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.2522747124!2d73.72343161352927!3d19.99113697921964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdec5f2679c29c5%3A0x6347353b3f2c5f8c!2sNashik%2C%20Maharashtra%2C%20India!5e0!3m2!1sen!2sus!4v1730509653696!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>
    


    
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/validate.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>


</html>024!2i