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
                <img src="img/forgot.png" height="500" width="800">
                
            </div>
            <div class="col-md-6">
            <form action="sendforgetmail.php" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
                        <div class="contact__form__title">
                        <h2>Forgot Password</h2>
                    </div>
                    <center>
                    <?php
if(isset($_GET["message"])){

?>
<div class="alert alert-danger"><?php echo $_GET["message"] ?></div>
<?php }?>
</center>

							<div class="row py-2">
								<div class="col-sm-10 form-group">
									<label class="form-control-label"><i class="fa fa-user"></i>&nbsp;User Name : &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <span class="text-danger" id="fname"></span>
									<input type="text" name="username" placeholder="Enter Email Here.." class="form-control bor first_name" required>
								</div>
                            </div>
							

							<center class="mb-12">
								<button type="submit" class="btn btn-dark px-5" id="submit" name="sendmail">SEND EMAIL</button>
							</center>

                            <div class="container text-center my-4 ">
                            Already have an account? <a href="signin.php">Sign-In</a>
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