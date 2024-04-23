<!DOCTYPE html>
<html>

<head>
	<?php
        include_once "head.php";
		session_start();
    ?>
</head>

<script>
	function pagination(page) {
		$.ajax({
			type: "POST",
			url: "subcatpagination.php",
			data: {
				page: page
			},
			success: function (data) {
				$('#pagination').html(data);
			}
		});
	}

	function sweetalrt(id,page) {
		//alert(id);
		swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this imaginary SubCategory Data!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: "POST",
						url: "delete_subcategory.php",
						data: {
							subcat_id: id
						},
						success: function (subcat_data) {
							//alert(subcat_data);
							if (subcat_data == 0) {
								$('#subcat_' + id).html(subcat_data);
								p=$("#page").val();
								pagination(p);
							}
						}
					});
					swal("Poof! Your imaginary SubCategory data has been deleted!", {
						icon: "success",
					});
				} else {
					swal("Your imaginary SubCategory data is safe!");
				}
			});
	}
function deactive(id, status) {
$.ajax({
    type: 'POST',
    url: 'updstatus.php',

    data: {
        id: id,
        id_name:'subcategory_id',
        page_name:'subcategory',
        status: status
    },
    success: function(data) {
        // alert(data);

        $('#status_' + id).html(data);
    }
});

}

function active(id, status){
$.ajax({
    type: 'POST',
    url: 'updstatus.php',
    data: {
        id: id,
        id_name:'subcategory_id',
        page_name:'subcategory',
        status: status
    },
    success: function(data) {
        // alert(data);
        $('#status_' + id).html(data);

    }
});
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
							<img src="vendors/images/edwd.png" alt="" class="rounded-circle" height="40" width="40px">
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
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg"
						alt=""></a>
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
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i
								class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i
								class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
								aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i
								class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i
								class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-6">
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

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>SubCategories Table</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage SubCategory</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>

				<!-- Striped table start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-right">
							<a href="add_subcategory.php" class="btn btn-primary btn-sm scroll-click" rel="content-y"
								role="button"><i class="fa fa-code"></i>Add SubCategory</a>
						</div>
					</div>
					<div class="table-responsive" id="pagination">

						<?php
      include_once 'dbcontroller.php';
      $handle = new DBcontroller();
      if (isset($_GET['page'])) {

        $page = $_GET['page'];
      } else {


        $page = 1;
      }
      $num_per_page = 4;
      $start_from = ($page - 1) * 04;


      //$query = "select * from subcategory order by subcategory_name asc limit $start_from,$num_per_page";

	//   $query = "select c.category_id,category_name,s.* from category c inner join subcategory s on s.category_id=c.category_id order by s.subcategory_name asc limit $start_from,$num_per_page";

	//   $result = $handle->fetchall($query);
	$q="select * from subcategory";
	$c=$handle->numrows($q);
	if($c>0){
	$query = "select c.category_id,category_name,s.* from category c inner join subcategory s on s.category_id=c.category_id order by s.subcategory_name asc limit $start_from,$num_per_page";
	$count=$handle->numrows($query);
	if($count>0){

	$fetch = $handle->fetchall($query);
	}else{
		$page=$page-1;
		$start_from = ($page - 1) * 04;

		$query ="select c.category_id,category_name,s.* from category c inner join subcategory s on s.category_id=c.category_id order by s.subcategory_name asc limit $start_from,$num_per_page";
	$count=$handle->numrows($query); 
	$fetch = $handle->fetchall($query);
	}
	}else{
		$fetch="";
	}

      ?>
						<table class="table table-striped text-center">

							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Category Name</th>
									<th scope="col">SubCategory Name</th>
									<th scope="col">SubCategory Description</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if(empty($fetch)){
									echo "<div id='message' class='alert alert-danger '>No Data are there </div>";
								  }else{
								$i = 0;
							
								foreach($fetch as $data)
								{
							?>
								<tr id="subcat_<?php echo $data['subcategory_id'] ?>">
									<th scope="row"><?php echo ++$i ?></th>
									<td><?php echo $data['category_name'] ?></td>
									<td><?php echo $data['subcategory_name'] ?></td>
									<input type="hidden" id="page" name="page" value="<?php echo $page ?>">
									<td><?php echo $data['subcategory_des'] ?></td>
									<?php if ($data['status'] == 'deactive') { ?>
                                                            <td id="status_<?php echo $data['subcategory_id'] ?>"> <button class="btn btn-danger" onclick="active(<?php echo $data['subcategory_id'] ?>,'active')">Deactive</button></td>

                                                        <?php } else { ?>
                                                            <td id="status_<?php echo $data['subcategory_id'] ?>"> <button class="btn btn-success" onclick="deactive(<?php echo $data['subcategory_id'] ?>,'deactive')">Active</button></td>

                                                        <?php } ?>
									<td class="">
										<div class="d-flex hustify-content-center">
										<button type="button" class="btn btn-danger "
											onclick="sweetalrt(<?php echo $data['subcategory_id'] ?>)"><i
												class="fa fa-trash"></i></button>
										<button type="button"
											onclick="window.location='edit_subcategory.php?subcat_id=<?php echo $data['subcategory_id']?>'"
											class="btn btn-success"><i class="fa fa-edit"></i></button>
								</div>
									</td>
								</tr>
								<?php
									}
								}
							?>
							</tbody>
						</table>
						<center>
							<?php
                  $query1 = "select * from subcategory  ";

                  $total_record = $handle->numrows($query1);

                  $total_page = ceil($total_record / $num_per_page);

                  if ($page > 1) { ?>
							<a onclick='pagination(<?php echo $page - 1 ?>)' class='btn btn-light'>Previous</a>
							<?php  }

                  for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $page) { ?>

							<a onclick="pagination(<?php echo $i ?>)"
								class='btn btn-light active'><?php echo $i ?></a>
							<?php } else { ?>

							<a onclick="pagination(<?php echo $i ?>)" class='btn btn-light'><?php echo $i ?></a>

							<?php }
                  }
                  if ($i > $page) {
                    if ($page < $total_page) { ?>
							<a onclick="pagination(<?php echo $page + 1 ?>)" class='btn btn-light'>Next</a>
							<?php }
                  }
          ?>
						</center>
						<div class="collapse collapse-box" id="striped-table">
							<div class="code-box">
								<div class="clearfix">
									<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#striped-table-code"><i class="fa fa-clipboard"></i> Copy
										Code</a>
									<a href="#striped-table" class="btn btn-primary btn-sm pull-right" rel="content-y"
										data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide
										Code</a>
								</div>
								<pre><code class="xml copy-pre" id="striped-table-code">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                </tr>
                            </tbody>
                            </table>
							</code></pre>
							</div>
						</div>
					</div>
					<!-- Striped table End -->
				</div>
				<!-- footer -->
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