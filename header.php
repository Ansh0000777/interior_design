                                    
                                    <?php
                            if(isset($_SESSION['email'])){
                                ?>
                                <li class="dropdown"><a href="profile.php"> Profile</a>
                                    <ul>
                                        <li><a href="change_password.php">Change Password</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div><!--Nav Outer End-->  
                
                            <!-- cart icon -->
                            <?php
                                $count=0;
                                if (isset($_SESSION['counter'])) {
                                    $count = $_SESSION['counter'];
                                }
                            ?>
                            <a href="shopping-cart.php" class="cart-btn-outer"><div class="icon"><span class="flaticon-shopping-cart fa-3x"></span><span class="count"><?php echo $count ?></span></div></a>
                            
                            <?php
                            }else{
                            ?>       
                                <li class="dropdown"><a href="signup.php">Login/Signup</a>
                                    <ul>
                                        <li><a href="login.php">login</a></li>
                                        <li><a href="signup.php">Signup</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div><!--Nav Outer End-->
                            <?php
                            }
                            ?>