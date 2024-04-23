<!DOCTYPE html>
<html>
<head>
	<?php
		include "head.php";
	?>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			
			<div class="login-menu">
				<ul>
					<li><a href="register.php">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
					<!-- <img src="img/log-in.png" alt=""> -->

				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<div class="brand-logo px-5">
								<a href="login.php">
									<img src="vendors/images/logo.png" alt="" >
								</a>
							</div>
						</div>
						<form action="check_login.php" method="post">
							<div class="select-role">
								<center>
								<?php
									if(isset($_GET["error"])){
									echo '<div class="alert alert-danger">'.$_GET['error'].'</div>';
									}
									if(isset($_GET["message"])){

										?>
										<div class="alert alert-success"><?php echo $_GET["message"] ?></div>
										<?php }?>
								</center>
								
								
							</div>
							<div class="input-group custom">
								<input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<!-- <div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div> -->
								<div class="col-9">
									<div class="forgot-password"><a href="forgot-password.php">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										
											<!-- use code for form submit -->
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In" >
										
										<!-- <a class="btn btn-primary btn-lg btn-block" type="submit">Sign In</a> -->
									</div>
									<!-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a>
									</div> -->
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