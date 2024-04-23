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
        //include_once "nav.php";
    ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
        //include_once "header.php";
        include_once "validation.php";
    ?>
    <!-- Header Section End -->
    

    

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                       <div class="col-md-6" >
                <img src="img/signin2.png" height="500" width="800">
                
            </div>
            <div class="col-md-6">
            <form action="check_signin.php" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
                        <div class="contact__form__title">
                      
                        <h2>SIGN-IN</h2>
                        <?php 

if(isset($_GET["info"])){
  echo "<div class='alert alert-danger mt-3'>".$_GET["info"]."</div>";
}
?>
<?php

if(isset($_GET["message"])){

?>
<div class="alert alert-success"><?php echo $_GET["message"] ?></div>
<?php }?>
                    </div>
							<div class="row py-2">
								<div class="col-sm-12 form-group">
									<label class="form-control-label"><i class="fa fa-user"></i>&nbsp;Email : &nbsp;&nbsp;&nbsp;
                                    </label>
                                    <span class="text-danger" id="email"></span>
									<input type="text" name="email" placeholder="Enter User Name Here.." class="form-control bor " required>
                                    <span id="email"></span>
                                    
								</div>
                            </div>
							
							<div class="row py-2">
								<div class="col-sm-12 form-group">
									<label class="form-control-label"><i class="fa fa-lock"></i>&nbsp;Password</label>&nbsp;&nbsp;&nbsp;
                                    </label>
                                    <span class="text-danger" id="password"></span>
									<input type="password" name="password" placeholder="Enter Password Here.." class="form-control bor password" required>
                                    <span id="password"></span>

								</div>
							</div>

							<center class="mb-5">
								<button type="submit"
									class="btn btn-dark"
									id="submit">
									Sign In
									&nbsp;&nbsp;
									<i class="fa fa-user-plus"></i>
								</button>
							</center>

                            <div class="row">
                                <div class="text-left my-4 col-md-6">
                                New User? <a href="signup.php">Sign-Up</a>
                                </div>
                                <div class="text-right my-4 col-md-6">
                                <a href="forget.php">Forgot Password?</a>
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