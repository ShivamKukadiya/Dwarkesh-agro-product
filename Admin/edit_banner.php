<!DOCTYPE html>
<html>
<head>
	<?php
        include_once "head.php";
		session_start();
    ?>
</head>
<script>
    $(document).ready(function(){
     //alert("hello");
      //$('#img_upload').hide();

    });
    function uploadimg(event)
    {
      // alert (event);
      $('#img_upload').show(1000);
      var reader = new FileReader();
      reader.onload = function()
      {
        var output = document.getElementById('img_upload');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
    </script>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/logo1.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/1.jpg" alt="" class="rounded-circle" height="40" width="40px">
						</span>
						<?php 
							if(isset($_SESSION['email']))
							{
								echo $_SESSION['email'];
							}
							?>
						<span class="user-name"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<!-- <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a> -->
						<a class="dropdown-item" href="login.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>
    <!-- sidebar -->
	
    <?php
        include_once "sidebar.php";
    ?>
	<!-- sidebar-end -->
	<div class="mobile-menu-overlay"></div>
	<?php
		include_once 'dbcontroller.php';
		$obj = new DBcontroller();
		$id=$obj->secure($_GET['id']);
		$query = "select * from banner where banner_id='$id'";
		$fetch = $obj->fetchresult($query);
	
	?>
    <!-- sidebar-end -->
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">EDIT BANNER</h4>
						</div>
						<div class="pull-right">
							<a href="add_banner.php" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form action="check_editbanner.php" method="post" enctype="multipart/form-data">
                        <input type='hidden' name='banner_id' value="<?php echo $fetch['banner_id']?>" >
						<div class="form-group">
							<label>Banner Caption</label>
							<input class="form-control" type="text" value="<?php echo $fetch['banner_caption']?>" placeholder="Banner Caption" name="banner_caption">
						</div>
                        <div class="form-group">
							<label>Banner SubCaption</label>
							<input class="form-control" type="text" value="<?php echo $fetch['banner_sub_caption']?>" placeholder="Banner SubCaption" name="banner_sub_caption">
						</div>
						<div class="form-group">
							<label>Banner Index</label>
							<input class="form-control" type="number" value="<?php echo $fetch['banner_index']?>" placeholder="Banner Index" name="banner_index">
						</div>
						<div class="form-group">
							<label>Convert</label>
							<select class="form-control" type="text" id="" name="convert">
								<?php
									if($fetch['convert']=="Y"){
								
										echo '<option>Select</option>
										<option value="Y" selected>Yes</option>
										<option value="N">No</option>';

									}else{
										echo '<option>Select</option>
										<option value="Y">Yes</option>
										<option value="N" selected>No</option>';
                                    }
								?>
                            </select>
						</div>
						<div class="form-group">
							<label>Banner Image</label>
							
							<input class="form-control" value=<?php echo $fetch['banner_image']?> type="file" hidden="true" onchange="uploadimg(event)" id="file"
								name="banner_image"><br>
							<label for="file" class="btn btn-primary">Upload</label>
							<?php
								if(isset($fetch['banner_image']))
								{
										echo '<img src="bannerimages/convert/TH'.$fetch['banner_image'].'" alt="" id="img_upload" height="100px" width="100px">';
								}
							?>
							
						</div>
						<div class="form-actions center">
							<button type="submit" class="btn btn-primary" name="editbanner">SUBMIT</button>
						</div>
						
					</form>
					<div class="collapse collapse-box" id="horizontal-basic-form1" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="horizontal-basic">
<form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" value="bootstrap@example.com" type="email">
	</div>
	<div class="form-group">
		<label>URL</label>
		<input class="form-control" value="https://getbootstrap.com" type="url">
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input class="form-control" value="1-(111)-111-1111" type="tel">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" value="password" type="password">
	</div>
	<div class="form-group">
		<label>Readonly input</label>
		<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
	</div>
	<div class="form-group">
		<label>Disabled input</label>
		<input type="text" class="form-control" placeholder="Disabled input" disabled="">
	</div>
	
	
</form>

</code></pre>
						</div>
					</div>
				</div>
				<!-- horizontal Basic Forms End -->

				
			</div>
			<!-- footer-start -->
            <?php
                include_once "footer.php";
            ?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>