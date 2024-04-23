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
    
    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
            
            <div class="col-md-6" >
                <img src="img/resetpass.png" height="450" width="500">
                
            </div>
            <div class="col-md-6">
            <form action="check_forgot.php" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
                        <div class="contact__form__title">
                            <h2>CREATE PASSWORD</h2>
                            
                        </div>
                        <div class="row py-2">
								<div class="col-sm-10 form-group">
									<label class="form-control-label"><i class="fa fa-lock"></i>&nbsp;New Password</label>&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="password"></span>
									<input type="password" name="new_password" placeholder="Enter New Password Here.."
										class="form-control bor password" required>
								</div>
								<div class="col-sm-10 form-group">
									<label class="form-control-label"><i class="fa fa-key"></i>&nbsp;Confirm
										Password</label>&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="confirm"></span>
									<input type="text" name="repeat_password" placeholder="Enter Confirm Password Here.."
										class="form-control bor confirm" required>
								</div>
							</div>

							<center class="mb-5">
								<button type="submit"
									class="btn btn-dark mb-5 px-5"
									id="submit" name="submitnewpass">
									Submit
								</button>
							</center>

                            
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