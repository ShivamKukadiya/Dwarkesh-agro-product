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

    

    <!-- Header Section Begin -->
    <?php
        include_once "validation.php";
    ?>
    <!-- Header Section End -->
    
    <!-- Contact Form Begin -->
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-2">
                    <div class="contact__form__title">
                        <h2>SIGN-UP</h2>
                    </div>
                </div>

            <div class="col-md-6" >
                <img src="img/signup.png" height="600" width="1200">
            </div>
            <div class="col-md-6">
            <form action="check_signup.php" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
							<div class="row py-2">
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-user"></i>&nbsp;First Name :
										&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="fname"></span>
									<input type="text" name="fname" placeholder="Enter First Name Here.."
										class="form-control bor first_name" required>
                                        <span id="fname"></span>
								</div>
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-user"></i>&nbsp;Last Name :
										&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="lname"></span>
									<input type="text" name="lname" placeholder="Enter Last Name Here.."
										class="form-control bor last_name" required>
                                        <span id="lname"></span>
								</div>
							</div>

							<div class="row py-2">
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-envelope"></i>&nbsp;Email Address
										: &nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="email"></span>
									<input type="email" name="email" placeholder="Enter Email Address Here.."
										class="form-control bor email" required>
                                        <span id="email"></span>
								</div>
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-phone"></i>&nbsp;Mobile No. :
										&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="mobile"></span>
									<input type="text" name="phonenumber" placeholder="Enter Mobile No. Here.."
										class="form-control bor mobile" required>
                                        <span id="mobile"></span>   
								</div>
							</div>

							<div class="row py-1">
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i
											class="fa fa-mars-stroke"></i>&nbsp;Gender</label>
									<br>
									<div class="form-check form-check-inline">
										<input class=" bg-dark mt-4" type="radio" name="gender" value="Male"
											checked />&nbsp;&nbsp;
										<label class="form-control-label ">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="bg-dark mt-4" type="radio" name="gender"
											value="Female" />&nbsp;&nbsp;
										<label class=" ">Female</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="bg-dark mt-4" type="radio" name="gender"
											value="Other" />&nbsp;&nbsp;
										<label class="form-control-label ">Other</label>
									</div>
								</div>
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-upload"></i>&nbsp;Profile
										Picture</label>
									<input type="file" name="profile" class="form-control bor" required>
								</div>
							</div>

                            <div class="row py-2">
								<div class="col-sm-12 form-group">
									<label class="form-control-label">&nbsp;Address
										: &nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="address"></span>
									<textarea rows="2" name="address" placeholder="Enter Address Here.."
										class="form-control bor address" required></textarea>
                                        <span id="address"></span>
								</div>
								
							</div>
							<div class="row py-2">
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-lock"></i>&nbsp;Password</label>&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="password"></span>
									<input type="password" name="password" placeholder="Enter Password Here.."
										class="form-control bor password" required>
                                    <span id="password"></span>
								</div>
								<div class="col-sm-6 form-group">
									<label class="form-control-label"><i class="fa fa-key"></i>&nbsp;Confirm
										Password</label>&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="confirm"></span>
									<input type="text" name="con_password" placeholder="Enter Confirm Password Here.."
										class="form-control bor confirm" required>
                                    <span id="confirm"></span>
								</div>
							</div>
							<center class="mb-3">
								<button type="submit"
									class="btn btn-dark"
									id="submit">
									Sign up
									&nbsp;&nbsp;
									<i class="fa fa-user-plus"></i>
								</button>
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
    <!-- Footer Section End -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>