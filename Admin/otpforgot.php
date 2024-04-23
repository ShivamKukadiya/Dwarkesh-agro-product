<!DOCTYPE html>
<html>

<head>
	<?php
		include_once "head.php";
	?>
</head>

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<!-- <div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/logo.png" alt="">
				</a>
			</div> -->
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="vendors/images/otp.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">OTP Varification</h2>
						</div>
                        <?php
                            if(isset($_GET["message"])){
                        ?>
                        <div class="alert alert-danger"><?php echo $_GET["message"] ?></div>
                        <?php }?>
						<form action="processforgototp.php" method="post">
                        <div class="col-sm-12 form-group">
									<label class="form-control-label">OTP :
										&nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="mobile"></span>
									<input type="text" name="otp" placeholder="Enter OTP Here.."
										class="form-control bor mobile" required>
								</div>
                            

                            <button type="submit" name="submit" class="btn btn-dark mx-3 px-5" id="submit">
                                SUBMIT
                            </button>
                            <button type="submit" name="ResendOTP" class="btn btn-dark  px-4" id="resend otp">
                                RESEND OTP
                            </button>
                            <div class="row">
                                <div class="text-left my-4 col-md-6">
                                New User? <a href="signup.php">Sign-Up</a>
                                </div>
                            </div>
									</div>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>