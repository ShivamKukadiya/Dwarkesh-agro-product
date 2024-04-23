<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include_once "head.php";
?>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <?php
        include_once "nav.php";
    ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
        include_once "header.php";
        include_once "ajax.php";
    ?>
         
         <section class="breadcrumb-section set-bg" data-setbg="img/bread.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Confirm Order</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Product Section End -->
    <section class="checkout spad">
								<div class="container">
									<div>
										<div class="vertical_post check_box_agile">
											<h5
												style="font-weight:bolder; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:25px; color:black; font-style:italic">
												COD (Cash On Delivery)</h5>
											<form action="insertorder.php" method="post" class="cashon_delivery">
												<div class="checkbox">
													<div class="check_box_one cashon_delivery p-2">
														<label class="anim">
															<input style="height:15px; width:15px;" type="checkbox"
																class="checkbox" name="cash" value="Cash on Delivery"
																required>&nbsp;&nbsp;<span
																style="font-size:20px; font-style:italic"> Sure you want
																to make order.</span>
														</label>
													</div>
												</div>
												<br>
												<div class="row justify-content-center">
													<div class="col-md-5">
														<button
															class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail mx-1 my-2 btn btn-dark"
															style="cursor:pointer" name="insertorder">CONFIRM
															ORDER</button>
													</div>
													<div class="col-md-5">
														<button
															class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail mx-1 my-2 btn btn-dark"
															style="cursor:pointer"
															onclick="history.back()">Back</button>
													</div>
													</br>
											</form>
										</div>
									</div>
								</div>
							</section>
    <!-- Footer Section Begin -->
    <?php
        include_once "footer.php";
    ?>
    <!-- Footer Section End -->



</body>

</html>