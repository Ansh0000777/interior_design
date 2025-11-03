<?php
    session_start();
    require 'check_if_added.php';
?>


<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Interiorr - Our Shop</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/nouislider.css" rel="stylesheet">
<link href="css/nouislider.pips.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
</head>

<body>

<div class="page-wrapper">
    
    <div class="preloader"></div>

        <header class="main-header">
            <div class="header-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        
                        <div class="top-right pull-right">
                        
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
            </div><div class="auto-container" style="padding-bottom: 30px;">
        <div class="form-group">
            <input type="text" id="searchInput" onkeyup="filterShopItems()" 
                   placeholder="Search for products (e.g., 'Sofa', 'Lamp')" 
                   class="form-control" 
                   style="max-width: 600px; margin: 0 auto; padding: 20px; font-size: 16px;">
        </div>
    
</div>

            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
                        </div>
                        
                        <div class="nav-outer clearfix">
                            <nav class="main-menu">
                                <div class="navbar-header">
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
    
                                            <li class="current"><a href="shop.php">Shop</a></li>
                                            
                                            <li><a href="contact.php">Contact</a></li>
                                            
                                            <?php include 'header.php'; ?>

                                
                                <div class="nav-toggler">
                                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                                    </div></div>      
                    </div>
                </div>
            </div>
            
        </header>
        <section class="hidden-bar right-align">
            
            <div class="hidden-bar-closer">
                <button class="btn"><i class="fa fa-close"></i></button>
            </div>
            
            <div class="hidden-bar-wrapper">
            
                <div class="logo text-center">
                    <a href="index.php"><img src="images/logo-2.png" alt=""></a>            
                </div><div class="side-menu">
                    <ul class="navigation">
                        <li><a href="index.php">Home</a>
                                
                        <li><a href="about-us.php">About Us</a></li>

                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>

                        <li><a href="quotation.php">Free Quotation</a> </li>

                        <li class="current" ><a href="shop.php">Shop</a> </li>
                        
                        <li><a href="contact.php">Contact</a></li>

                        <?php include 'header.php'; ?>
                    </ul>
                </div></section>

        <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Shop Our Exclusive Products</h1>
        </div>
    </section>

    
    <div class="auto-container">
            <div class="row clearfix">
                
                <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    
                    <section class="products-section no-padd-top">
                        
                            
                        <div class="row clearfix" id="items-list">
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p1.jpg" title="Split-leaf philodendron, Swiss cheese plant, or windowleaf (Monstera deliciosa) is a tropical plant <br> native to rainforests of Central America from southern Mexico to Panama, and commonly grown as a foliage houseplant." title="Quick View"> <img src="images/resource/products/product-01.jpg" alt="Split Leafe plant"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Split Leaf Philodendrons Plant</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 989 <span>₹ 1456</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(1)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=1" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p2.jpg" title="Copper Lamps(Set of 3) <br> " title="Quick View"> <img src="images/resource/products/product-02.jpg" alt="Copper Lamps(Set of 3)"/> </a>
                                    </figure>
                                    <div class="lower-content">
                                        <h3><a>Copper Lamps(Set of 3)</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 1977 <span>₹ 2378</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(2)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=2" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                    <div class="item-sale-tag top">Top</div>
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p3.jpg" title="Walton Single Chair and Vase <br>  " title="Quick View"> <img src="images/resource/products/product-03.jpg" alt="Walton Single Chair and Vase)"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Walton Single Chair and Vase</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 2492 <span>₹ 2838</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(3)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=3" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p4.jpg" title="Traditional Patterrn Chairs <br>  " title="Quick View"> <img src="images/resource/products/product-04.jpg" alt="Traditional Patterrn Chairs)"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Traditional Patterrn Chairs</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 4238 <span>₹ 4678</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(4)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=4" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p5.jpg" title="Crystal Lamp <br>  " title="Quick View"> <img src="images/resource/products/product-05.jpg" alt="Crystal Lamp)"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Crystal Lamp</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 3478 <span>₹ 3989</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(5)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=5" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="default-shop-item out-of-stock col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p9.jpg" title="Succulent Plant(Set of 3) <br>  " title="Quick View"> <img src="images/resource/products/product-09.jpg" alt="Succulent Plant(Set of 3))"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Succulent Plant(Set of 3)</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 1947 <span>₹ 1998</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(9)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=9" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                    <div class="dead-overlay"><span class="text">Out Of Stock</span></div>
                                </div>
                            </div>
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p6.jpg" title="Modern Unique wooden Lamp <br>  " title="Quick View"> <img src="images/resource/products/product-06.jpg" alt="Modern Unique wooden Lamp)"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Modern Unique wooden Lamp</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 2899 <span>₹ 3589</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(6)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=6" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p7.jpg" title="Elite Dining Set-Black <br>  " title="Quick View"> <img src="images/resource/products/product-07.jpg" alt="Elite Dining Set-Black)"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Elite Dining Set-Black</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 8925 <span>₹ 9978</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(7)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=7" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="default-shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12 shop-item">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a  class="zoom-btn lightbox-image" href="images/resource/products/p8.jpg" title="Elite Tea Counter table with vase <br>  " title="Quick View"> <img src="images/resource/products/product-08.jpg" alt="Elite Tea Counter table with vase)"/> </a>
                                    </figure>
                                    
                                    <div class="lower-content">
                                        <h3><a>Elite Tea Counter Top with vase</a></h3>
                                        
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        
                                        <div class="price">₹ 6793 <span>₹ 7120</span></div>
                                        <div class="links-box">
                                            
                                            <?php if(!isset($_SESSION['email'])){  ?>
                                                <p><a href="login.php" role="button" class="cart-btn">Buy Now</a></p>
                                            <?php
                                            }
                                            else{
                                                if(check_if_added_to_cart(8)){
                                                    echo '<a href="" class=cart-btn btn-success disabled>Added to cart</a>';
                                                }else{
                                                    ?>
                                                    <a href="cart_add.php?id=8" class="cart-btn btn-primary" name="add" value="add" class="cart-btn btr-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            

                        </div> </section>
                
                </div></div>
        </div>
    </div>
    
    
        <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
        <div class="auto-container centered">
            <div class="footer-bottom centered">
            <div class="auto-container centered">
                <div class="clearfix">
                    <div class="pull-left"> All Copyrights are reserved INTERIORR 2021 <i class="fa fa-copyright" aria-hidden="true"></i> </div>
                </div>
            </div>
        </div>
    </footer>
    
</div>
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


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