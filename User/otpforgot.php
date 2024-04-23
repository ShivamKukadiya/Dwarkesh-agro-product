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

    

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
            
            <div class="col-md-6" >
                <img src="img/otp.png" height="500" width="800">
                
            </div>
            <div class="col-md-6">
            <form action="processforgototp.php" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
                        <div class="contact__form__title">
                        <h2>OTP Varification</h2>
                        <?php

if(isset($_GET["message"])){

?>
<div class="alert alert-danger"><?php echo $_GET["message"] ?></div>
<?php }?>
                    </div>
							<div class="row py-2">
                                <div class="col-sm-12 form-group">
									<label class="form-control-label">OTP :
										&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="mobile"></span>
									<input type="text" name="otp" placeholder="Enter OTP Here.."
										class="form-control bor mobile" required>
								</div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-dark mx-5 px-5" id="submit">
                                SUBMIT
                            </button>
                            <button type="submit" name="ResendOTP" class="btn btn-dark mx-3 px-4" id="resend otp">
                                RESEND OTP
                            </button>
							

                            <div class="row">
                                <div class="text-left my-4 col-md-6">
                                New User? <a href="signup.php">Sign-Up</a>
                                </div>
                            </div>
					</form>
            </div>

            </div>
         
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <?php
        //include_once "footer.php";
        
    ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Footer Section End -->


</body>

</html>