
<?php
session_start();
?>



<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>INTERIORR | Homepage</title>
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

                                    <li class="current"><a href="index.php">Home</a></li>
                                
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
                        <li class="current"><a href="index.php">Home</a></li>
                        
                        <li><a href="about-us.php">About Us</a></li>

                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li ><a href="quotation.php">Free Quotation</a> </li>

                        <li><a href="shop.php">Shop</a> </li>
                        
                        <li><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    </ul>
            </div><!-- / Hidden Bar Wrapper -->
        </section>

        <!-- / Hidden Bar -->
    
    
    
    <!--Main Slider-->
    
    <section class="main-slider">
        
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3-01-01.jpg"    data-title="Awesome Title Here">
                    <img src="images/main-slider/image-3-01-01.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="500"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>We Give Life to <br>Your Home</h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="500"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">Interiorr brings 20 years of experience<br>right to your home or office.</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="500"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#services" class="theme-btn btn-style-one">Our Services</a> &ensp; <a href="shop.php" class="theme-btn btn-style-two">Buy now</a></div>
                    
                    
                    </li>

                    
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2-01.jpg"    data-title="Awesome Title Here">
                    <img src="images/main-slider/image-2-01.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Solution For Joy Living</h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="0"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-center">Interiorr brings 20 years of experience<br>right to your home or office.</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="15"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#services" class="theme-btn btn-style-one">Our Services</a> &ensp; <a href="shop.php" class="theme-btn btn-style-two">Buy now</a></div>
                    
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/party-01.jpg"    data-title="Awesome Title Here">
                    <img src="images/main-slider/party-01.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>BE BOLD TO DESIGN <BR> YOUR SPACE</h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">Interiorr brings 20 years of experience<br>right to your home or office.</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#services" class="theme-btn btn-style-one">Our Services</a> &ensp; <a href="shop.php" class="theme-btn btn-style-two">Buy now</a></div>
                    
                    
                    </li>

                </ul>
                
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    <!--welcome-section-->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--welcome-column-->
                <div class="col-md-6 col-sm-12 col-xs-12 welcome-column">
                    <!--inner-content-->
                    <div class="inner-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h2>Welcome to INTERIORR</h2>
                        <h3> <span> We Have The Right Products to Fit Your Needs and Budget Purchase</span> - INTERIORR.</h3>
                        
                        <div class="text">Project Interiorr is an ultimate guidebook to help you to create a personal and inspired home designed for actually living. Every space has its own purpose. Our task is to understand, see and implement it.</div>
                        <figure class="signature">
                            <!-- <img src="images/icons/signature.png" alt="" /> -->
                        </figure>
                        
                        <!--author-title-->
                        <div class="author-title">
                            <div class="author-info">Ansh Puri  <span></span></div>
                            <div class="author-designation">Founder of INTERIORR.</div>
                        </div>
                    </div>
                </div>
                
                <!--service-column-->
                <div class="col-md-6 col-sm-12 col-xs-12 service-column">
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-avatar-1"></span>
                            </div>
                            <h3>We are Professional</h3>
                            <div class="category"><a href="#">Designers</a></div>
                            <div class="text">We are the best and most skilled providers to decorate the interiors. We turn interior decoration ideas into reality. With our team we help you to create your dream home.</div>
                        </div>
                    </div>
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-correct"></span>
                            </div>
                            <h3>We are Trusted</h3>
                            <div class="category"><a href="#">Team Members</a></div>
                            <div class="text">We emphasise on creating elements that lend a personal to spaces and appear inviting to prospects. With the support of our talented team of professionals.</div>
                        </div>
                    </div>
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-compass"></span>
                            </div>
                            <h3>We are Expert</h3>
                            <div class="category"><a href="#">Interiors</a></div>
                            <div class="text">We have a team of skilled and experienced professionals to install your ceilings and wall panels to the perfection. As per the taste, preference and budget of client we help them in organising their space the way they want.</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <hr> 
    <!-- covid-safety-standards -->
    <div class="covid-safety-standards mb-80">
        <div class="container">
        <div class="sec-title clearfix">
                <h2 class="pull-left">Our COVID-19 Safety Standards</h2>
            </div>
            <img src="images/background/covid.png" cover alt="" srcset="">
        </div>
    </div>

    <!--best-service-section-->
    <section class="best-service-section" id="services">
        <div class="auto-container">
            
            <!--sec-title-->
            <div class="sec-title clearfix">
                <h2 class="pull-left">Our Best Services</h2>
            </div>
            
            <div class="row clearfix">
            
                <!--service-block-two-->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-improvement"></span>
                        </div>
                        
                        <h3>Texture Painting</h3>
                        <div class="text">Textured finishes that redefine luxury. Interiorr offers an array of special effects for the interior walls of your interiors.</div>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-improvement"></span>
                        </div>
                    
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-parquet"></span>
                        </div>
                        
                        <h3>Wooden Flooring</h3>
                        <div class="text">Interiorr as largest collections of wooden floors from across the world, and installation by trained and certified specialists.</div>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-parquet"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-window"></span>
                        </div>
                        
                        <h3>Interior Curtains</h3>
                        <div class="text">Living room curtains—much like works of art—make a home look finished; they truly are a decoration in and of themselves.</div>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-window"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-tiles"></span>
                        </div>
                        
                        <h3>Wall design Works</h3>
                        <div class="text">Interiorr chooses your favorite colors, patterns and designs that match your personality and that positively affect your mood.</div>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-tiles"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-two"></span>
                        </div>
                        
                        <h3>Furniture Work</h3>
                        <div class="text">At Interiorr, Furniture designs for industrial, commercial and  innovation, aesthetic appeal and functionality are taken care.</div>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-dinner"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-bright-lightbulb"></span>
                        </div>
                        
                        <h3>Lighting Works</h3>
                        <div class="text">We plan lighting and electrical systems which aims for lighting companies, architecture or interior design firms and service clients.</div>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-bright-lightbulb"></span>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">
            
            <!--Section Title-->
            <div class="sec-title-four">
                <h2>Recent Projects</h2>
            </div>
            
            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters text-center">
                <div class="icon-box"><span class="fa fa-picture-o"></span></div>
                
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>          
                        <li class="filter" data-role="button" data-filter=".painting">Painting</li>
                        <li class="filter" data-role="button" data-filter=".flooring">Flooring</li>
                        <li class="filter" data-role="button" data-filter=".tile-marble">Tile &amp; Marble</li>
                        <li class="filter" data-role="button" data-filter=".furniture">Furniture</li>
                        <li class="filter" data-role="button" data-filter=".lighting">Lighting</li>
                    </ul>
                </div>
                
                
                <div class="items-container clearfix">
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all tile-marble">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all tile-marble lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all flooring tile-marble furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all painting flooring furniture">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all painting tile-marble furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 default-portfolio-item masonry-item all painting flooring tile-marble">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/7.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 default-portfolio-item masonry-item all flooring furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
                        </div>
                    </div>
                    
                </div>
                
            </div><!--End Sortable Masonry-->

        
        </div>    
        
        
    </section>
    
    <!--Reviews -->
    <section class="testimonial-style-one" style="background-image:url(images/background/image-2.jpg);">
        <div class="auto-container">
            <div class="row">
                <h2>What our clients think about us.?</h2> <br><br>
                <div class="carousel-outer">
                    <!-- <div class="icon fa fa-users"></div> -->
                    <div class="single-item-carousel">

                        <!--Review 1-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text"> <h3>Amazing designs and best quality.</h3> <br> This being the first house we purchased, I didn't want to comparomise with the quality of even a single element of the this house. To my obsolute delight all the products designed and delivered by INTERIORR are superb quality and looking factory finished.  </div>
                                <!--client-info-->
                                <div class="auther-info">
                                    <div class="auther-name">Sumanth, <span class="designation">Hegnahalli,Bangalore</span></div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Review 2-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text"> <h3>New Designs with old furniture</h3> <br> We wanted our furniture to be used in the design of our new house. INTERIORR took special care of our requirements and created a beautiful, modern, & traditional house for us.  </div>
                                <!--client-info-->
                                <div class="auther-info">
                                    <div class="auther-name">Naveen, <span class="designation">Greater Kailash,Delhi</span></div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Review 3-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text"> <h3>We got a vaastu problem solved.!</h3> <br> My family & I firmly belive in vaastu. It affects the house & the people residing in it. Team INTERIORR addresed my quries in detail and the designs were made specifically basis the vaastu requirements.   </div>
                                <!--client-info-->
                                <div class="auther-info">
                                    <div class="auther-name">Uday, <span class="designation">8th Mile,Bangalore</span></div>
                                </div>
                            </div>
                        </div>

                        <!--Review 3-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text"> <h3>Super quick turnaround time.</h3> <br> My wife wanted a modular kitchen but I wasn't sure if i could get ready in couple of months. But I was surprised & happy when INTERIORR delivered the modular kitchen well within time. Great job   </div>
                                <!--client-info-->
                                <div class="auther-info">
                                    <div class="auther-name">Osama , <span class="designation">Mumbai</span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>
        
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
            <div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-12 col-sm-12">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-12 col-sm-6">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo"><figure><a href="index.php"><img src="images/logo-4.png" alt=""></a></figure></div>
                                    <div class="widget-content"> <br> <br>
                                        <div class="text">At Project Interiorr, we make it easy by presenting photographs and tips for every room and style, whether it's a Scandinavian kitchen or country-style bedroom. With interior design trends changing every year, its vital to be aware of the latest materials, colours and styles for decorating rooms. Irrespective of the size or the layout of the room, we present ideas that can be adapted to almost any home. Whether its for an ultra-modern apartment in New delhi or a country side house in Cochin or Pune, you're sure to find a design idea from the photographs of rooms in project interior.</div>
                                        <ul class="contact-info">
                                            <li><span class="icon fa fa-map-marker"></span><a href="https://goo.gl/maps/qjyK8MP14HFpF2kbA" >India,Maharashtra,Nashik</a></li>
                                            <li><span class="icon fa fa-phone"></span><a href="tel:+919036644552">+91-9036644552</a>,<a href="tel:+919141167512">+91-9141167512</a></li>
                                            <li><span class="icon fa fa-envelope-o"></span><a href="mailto:anshpuri520@gmail.com">anshpuri520@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="pull-left"> All Copyrights are reserved INTERIORR 2021 <i class="fa fa-copyright" aria-hidden="true"></i> </div>
                    <div class="pull-right">
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>


</body>

</html>