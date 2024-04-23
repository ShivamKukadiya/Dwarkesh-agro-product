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
					<img src="vendors/images/createpass.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">CREATE PASSWORD</h2>
						</div>
						<form action="check_forgot.php" method="post">
                        
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
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>

</html>