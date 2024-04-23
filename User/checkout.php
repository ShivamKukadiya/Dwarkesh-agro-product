<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include_once "head.php";
    ?>
     
</head>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php
        include_once "nav.php";
    ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
        include_once "header.php";
        include_once "validation.php";
    ?>
    
    <!-- Header Section End -->

        
    
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bread.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="insertbilling.php" method="post">
                    <div class="row">
                        <div class="col-lg-7 col-md-6">
                    
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 form-group p_star">
                                    <label for="">First Name</label>
                                    <span class="text-danger" id="fname"></span>
									<input type="text" class="form-control first_name" id="first" name="f_name" placeholder="Enter  your first name" required/>
									<span class="placeholder text-danger" data-placeholder="First name" ></span>
								</div>

								<div class="col-md-6 form-group p_star">
                                    <label for="">Last Name</label>
                                    <span class="text-danger" id="lname"></span>
									<input type="text" class="form-control last_name" id="last" name="l_name" placeholder="Enter  your last name" required/>
									<span class="placeholder" data-placeholder="Last name"></span>
								</div>
							
								<div class="col-md-6 form-group p_star">
                                    <label for="">Phone Number</label>
                                    <span class="text-danger" id="mobile"></span>
									<input type="text" class="form-control mobile" id="number" name="phonenumber" placeholder="Enter  your phone number" required/>
                                    <span class="placeholder" data-placeholder="Phone Number"></span>   
								</div>

								<div class="col-md-6 form-group p_star">
                                <label for="">Email</label>
                                <span class="text-danger" id="email"></span>  
									<input type="text" class="form-control email" id="email" name="email" placeholder="Enter your email" required/>
									<span class="placeholder" data-placeholder="Email Address"></span>
								</div>
							</div>
						</div>
					
						<div class="col-md-12 form-group p_star">
                            <label for="">Address</label>
                            <span class="text-danger" id="address"></span>
							<input type="text" class="form-control address" id="add1" name="address" placeholder="Enter your address" required/>
							<span class="placeholder" data-placeholder="Address line 01"></span>
						</div>
						
						<div class="col-md-12 form-group p_star">
                            <label for="">City</label>
                            <span class="text-danger" id="city"></span>
							<input type="text" class="form-control city" id="city" name="city" placeholder="Enter your city" required/>
							<span class="placeholder" data-placeholder="Town/City"></span>
						</div>

						<div class="col-md-12 form-group p_star">
                            <label for="">State</label>
                            <span class="text-danger" id="state"></span>
							<input type="text" class="form-control state" id="city" name="state" placeholder="Enter your state" required/>
							<span class="placeholder" data-placeholder="state"></span>
						</div>

						<div class="col-md-12 form-group">
                            <label for="">Pincode</label>
                            <span class="text-danger" id="pincode"></span>
							<input type="text" class="form-control pincode" id="zip" name="pincode" placeholder="Enter your pincode" required/>
							<span class="placeholder" data-placeholder="pincode"></span>

						</div>
					
					<!-- </form> -->
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>


                                <?php 
                                    include_once '../ADMIN/dbcontroller.php';
                                    $handle = new DBcontroller();
                                    $query = "select * from addtocart where registration_id=(select registration_id from registration where email='" . $_SESSION['user_data']['email'] . "') and status='pending' ";
                                    $result = $handle->fetchall($query);
                                    $_SESSION['cart'] = $result;
                                    $sub_total=0;
                                    foreach ($result as $row) {
                                    
                                    ?>
                                    <li><?php echo $row['product_name']." X ".$row['product_qty']?><span><?php $t=$row["product_price"]*$row['product_qty'];
                                    echo "Rs. ".$t;
                                    $sub_total+=$t;
                                    ?></span></li>
                                  <?php }?>
                                </ul>
                                <br>
                                
                                <div class="checkout__order__total">Total <span><?php echo "Rs. ".$sub_total?></span></div>
                                
                                <p>Choose Payment option</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                       COD
                                        <input type="radio" name="mode" id="payment" value="COD" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Razorpay
                                        <input type="radio" name="mode" id="paypal" value="online" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" name="insertbilling" class="site-btn" id="submit">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <?php
        include_once "footer.php";
    ?>
    <!-- Footer Section End -->
</body>

</html>