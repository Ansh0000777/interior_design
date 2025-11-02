<?php
    session_start();
    require 'db_connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script> window.alert("No items in the cart!!"); </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
        }
    }
?>





<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Interiorr | Shopping Cart</title>
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
                            
                                        <li ><a href="about-us.php">About Us</a></li>
    
                                        <li ><a href="portfolio-fullwidth.php">Projects</a></li>
                                                
                                        <li><a href="quotation.php">Free Quotation</a> </li>
    
                                        <li ><a href="shop.php">Shop</a></li>
                                        
                                        <li><a href="contact.php">Contact</a></li>

                                        <?php include 'header.php'; ?>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->

                </div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Shopping Cart</h1>
        </div>
    </section>
    
    
    <!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">
            
            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th>Item No</th>
                                <th class="prod-column">PRODUCT</th>
                                <th class="price">Price</th>
                                <th>Total</th>
                                <th>Remove</th>
                                <th>Avalability</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php 
                            $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                            $no_of_user_products= mysqli_num_rows($user_products_result);
                            $counter=0;
                            while($row=mysqli_fetch_array($user_products_result)){
                                ?>
                                <tr>
                                    <td class="number">
                                        <?php  if ($counter === 0) {
                                                echo 0;
                                            }else{
                                                echo $counter;
                                            }?>
                                    </td>
                                    
                                    <td><h4
                                    class="prod-title"><?php echo $row['name']?></h4></td>

                                    <!-- <td class="qty"><input class="quantity-spinner" type="text" value="1" name="quantity"></td> -->

                                    <td class="price">₹<?php echo $row['price']?></td>

                                    <td class="sub-total">₹<?php echo $row['price']?></td>
                                    
                                    <td class="remove"><a href="cart_remove.php?id=<?php echo $row['id'] ?>" class="remove-btn"><span class="fa fa-trash-o"></span> Remove</a></td>
                                    
                                    <td class="unit-price"><div class="available-info"><span class="icon fa fa-check"></span> Item(s) <br>Avilable Now</div></td>
                                </tr>
                                
                                <tr></tr>
                            <?php $counter=$counter+1;
                            
                        }?>
                        <?php $_SESSION['counter']=$counter;  ?>
                            
                        </tbody>

                    </table>
                </div>
                                
                <br><br>

                <!--Cart Note-->
                <div class="cart-note"><span class="theme_color">Note:</span>Every product you buy from us can be customized according to your requirements with minimum charges <br> So we request you not to remove the items from the cart until the item as reached to you.</div>
                        

                <div class="row clearfix">
                    <div class="column col-md-6 col-sm-12 col-xs-12">
                        <!-- empty space -->
                        <div class="estimate-form styled-form">
                        </div>
                    </div>

                        <div class="column col-md-6 col-sm-12 col-xs-12">
                            <h3>Cart Total</h3>
                            <!--Totals Table-->
                            <ul class="totals-table">
                                <li class="clearfix"><span class="col col-title">Cart Subtotal</span><span class="col">₹ <?php echo $sum;?>/-</span></li>
                                <li class="clearfix"><span class="col col-title">Shipping and Handling</span><span class="col">Free Shipping</span></li>
                                <li class="clearfix"><span class="col col-title">Order Total</span><span class="col">₹ <?php echo $sum;?>/-</span></li>
                            </ul>
                            
                            <div class="padd-top-30 text-right">
                            <a class="theme-btn btn-style-two" href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Check Out</a>
                            </div>
                        </div>
                    
                </div>
                

            </div>
        </div>
    </section>
    

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
        
    
    
</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>


</html>