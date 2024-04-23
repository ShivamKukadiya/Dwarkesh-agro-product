<header class="header">
        <div class="header__top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>dwarkeshagro08@gmail.com</li>
                                <li>Free Shipping for all Order</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language"> 
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <!-- <ul onchange="set_language()" name="language" id="language">
                                    <li><a href="#">Gujarati</a></li>
                                    <li><a href="#">English</a></li>
                                </ul> -->
                            
                            </div>
                            <div class="header__top__right__language">
                            <?php if(isset($_SESSION["user_data"]["email"])) {?>
                            <a href="#"><i class="fa fa-user"></i></a>
                                <div><?php echo $_SESSION["user_data"]["fname"]." ".$_SESSION["user_data"]["lname"]?></div>
                                <ul>
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="signout.php">SignOut</a></li>
                                </ul>
                                <?php } else{?>
                                    <a href="#"><i class="fa fa-user"></i></a>
                                <div>My Account</div>
                                <ul>
                                    <li><a href="signup.php">SignUp</a></li>
                                    <li><a href="signin.php">SignIn</a></li>
                                </ul>
                               <?php } ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo1.png" width="150" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 mt-4">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="shop.php">Shop</a>
                                <?php
                                    include '../Admin/dbcontroller.php';   
                                            
                                    $obj = new DBcontroller();
                                    $query="select * from category where status='active'";
                                    $fetch_cat=$obj->fetchall($query);
                                    // print_r($fetch_cat);

                                    
                                ?>
                            </li>
                            <li><a href="./contact.php">Contact</a></li>
                            <li><a href="#">Details</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shopping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./aboutus.php">About Us</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="col-lg-2 mt-4">
                    <div class="header__cart">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <?php if(isset($_SESSION['user_data']['email'])) { ?>
                            <li><a href="shopping-cart.php"><i class="fa fa-shopping-bag"></i> <span id="count">0</span></a></li>
                            <?php }else{
                                ?>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>


<?php }
?>
                        </ul>
                        <div class="header__cart__price"><span class="me-5"></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>