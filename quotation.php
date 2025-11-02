<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "interior") or die("Connection Error: " . mysqli_error($conn));

if (isset($_POST['submit_qoute'])) {
    
    $work= mysqli_real_escape_string($con,$_POST['work']);
    $room= mysqli_real_escape_string($con,$_POST['room']);
    $purpose= mysqli_real_escape_string($con,$_POST['purpose']);
    $sqrtfeet= mysqli_real_escape_string($con,$_POST['sqrtfeet']);
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $phone_number= mysqli_real_escape_string($con,$_POST['phone_number']);
    $message=mysqli_real_escape_string($con,$_POST['message']);


    mysqli_query($con, "INSERT INTO free_quotation (work,room,purpose,sqrtfeet,name,email,phone_number,message) VALUES ('" . $work. "','" . $room. "','" . $purpose. "','" . $sqrtfeet. "', '" . $name. "', '" . $email. "','" . $phone_number. "','" . $message. "')");

    $insert_id = mysqli_insert_id($con);
    
    if(!empty($insert_id)) {
        ?> <script> alert("Thank you for Contacting Us..! We will reach you in a short while.."); </script>
        <?php
    }else{
        ?><script> alert(" Some thing went wrong...");
        </script>
    <?php
    }
}
mysqli_close($con);
?>


<!DOCTYPE html>
    <html>


    <head>
    <meta charset="utf-8">
    <title>INTERIORR Design Studio | Free Quotation</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
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
                                                    
                                            <li class="current"><a href="quotation.php">Free Quotation</a> </li>
        
                                            <li><a href="shop.php">Shop</a></li>
                                            
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
                                
                        <li><a href="about-us.php">About Us</a></li>

                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li class="current" ><a href="quotation.php">Free Quotation</a> </li>

                        <li><a href="shop.php">Shop</a> </li>
                        
                        <li><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    </ul>
            </div><!-- / Hidden Bar Wrapper -->
        </section>

        <!-- / Hidden Bar -->
        

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/christian-mackie-euBmypOZUZA-unsplash.jpg);">
        <div class="auto-container">
            <h1>Free Quotation</h1>
        </div>
    </section>



        <!--default-two-column  free estimate-->
    <section class="default-two-column">
        <div class="auto-container">
            <div class="row clearfix">
            
            <!-- info -->
                <div class="column spec-column col-md-6 col-sm-12">
                    <img src="images/resource/full_interior-01.jpg"  alt="" srcset="">
                </div>
                
                <div class="column form-column col-md-6 col-sm-12">
                    <!--sec-title-three-->
                    <div class="sec-title-three">
                        <div class="sub-title">Request for</div>
                        <h2>Free Quotation</h2>
                    </div>
                    
                    <!--form-box-->
                    <div class="form-box default-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="contact-form default-form">

                            <form method="POST" action="#">
                                <div class="row clearfix">
                                
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Your Name *"  autocomplete="off" required>
                                    </div>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Your Mail id *"  autocomplete="off" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone_number" value="" placeholder="Phone Number*"  autocomplete="off" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="work">
                                            <option>Full Interior</option>
                                            <option>Renovate</option>
                                            <option>Wooden Flooring</option>
                                            <option>Lighting Works</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="room">
                                            <option>1BHK</option>
                                            <option>2BHK</option>
                                            <option>3BHK</option>
                                            <option>3BHK +</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="purpose">
                                            <option>Own use</option>
                                            <option>To Rent out</option>
                                            <option>To Sale</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" name="sqrtfeet" value="" placeholder="Enter Sqrt Feet*" min="150" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two" name="submit_qoute">Get Quotation</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

        
        <!-- footer -->
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
    </div>   
    <!--End pagewrapper-->

    <script src="js/jquery.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    </body>


    </html>    