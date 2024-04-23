<!DOCTYPE html>
<html>

<head>
	<?php
		include_once "head.php";
	?>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
			<div class="col-md-6" >
                <img src="img/registration.png" height="400" width="1000">
            </div>
				<div class="col-md-6">
            		<form action="check_registration.php" method="post" enctype="multipart/form-data">
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
									<label class="form-control-label"><i class="fa fa-envelope"></i>&nbsp;Address
										: &nbsp;&nbsp;&nbsp;</label><span class="text-danger" id="email"></span>
									<textarea rows="2" name="address" placeholder="Enter Email Address Here.."
										class="form-control bor email" required></textarea>
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
	<!-- success Popup html Start -->
	
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>