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
        include_once "nav.php";
    ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php
        include_once "header.php";
        include_once "ajax.php";
    ?>
    <script>
        function getsubcategory(value) {
            // alert(value);
            $.ajax({
                type: "post",
                url: "getsubcategory.php",
                data: {
                    cat_id: value
                },
                success: function (data) {
                    // alert(data);
                    $('.subcategory_list').html(data);
                }
            });


        }

        $(document).ready(function () {

            $("#butt").on("click", function () {

                var cat = $("#cat").val();

                var subcat = $(".sub").val();
                // alert(subcat);

                $.ajax({
                    url: 'shop_filter.php',
                    type: 'post',
                    data: {
                        cat: cat,
                        subcat: subcat
                    },
                    success: function (data2) {
                        // alert(data2);
                        $('.hj').html(data2);
                    }

                });
            });
            $("#form1").on("keyup", function () {

                var search = $(this).val();

                $.ajax({
                    url: 'shop_filter.php',
                    type: 'post',
                    data: {
                        search: search,

                    },
                    success: function (data2) {
                        // alert(data2);
                        $('.hj').html(data2);
                    }

                });
            });
        });
    </script>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div> -->

            </div>

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bread.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-dark">
                    <div class="breadcrumb__text">
                        <h2>Agro Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-7">
                    <div class="row">
                        <div class="section-title product__discount__title">
                            <h2 class="mb-5">Our Product</h2>


                            <div class="row">
                                <div class="col-md-3 mb-5">
                                    <select name="" onchange="getsubcategory(this.value)" id="cat" class="form-control">
                                        <option value="">Selected category</option>
                                        <?php	$query="select * from category where status='active'";
							            $fetch=$obj->fetchall($query);
							            foreach($fetch as $data){?>
                                        <option value="<?php echo $data["category_id"] ?>">
                                            <?php echo $data["category_name"] ?>
                                            <?php }?>
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-4 subcategory_list">

                                </div>
                                <div class="col-md-2 mb-5">
                                    <div class="btn btn-dark text-white px-4 py-2  " id="butt">Filter</div>
                                </div>
                                <div class="col-md-3 mb-5">
                                    <input type="search" placeholder="search here" id="form1"
                                        class="form-control rounded" />
                                </div>
                                <div class="col-md-1 mb-5">
                                    <div class="btn btn-dark text-white px-4 py-2  "
                                        onclick="window.location='shop.php'">Back</div>
                                </div>
                            </div>
                        </div>
                        <div class=" row hj">
                            <?php
								if(isset($_GET["c_id"])){
										//    $query6 = "select c.category_id,category_name,s.subcat_id,subcat_name, p.* from category c , subcategory s ,product_table p where c.category_id=s.category_id and s.subcat_id = p.subcat_id and c.category_id='".$_GET["cat_id"]."' order by p.product_name"; 

                                           $query6 = "select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id and c.category_id='".$_GET["c_id"]."' order by p.product_name limit 20";

								}
                                else{
									$query6 = "select * from product where `status`='active' order by product_id desc limit 20";

									
								}
	                              $fetch_prod = $obj->fetchall($query6);
		                           // print_r($fetch_prod);
	               	               foreach($fetch_prod as $data){
		
		
		                  ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="../Admin/productimages/convertimages/RC<?php echo $data["product_img"]?>">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="shop-details.php?p_id=<?php echo $data['product_id']?>"><i
                                                        class="fa fa-retweet"></i></a></li>

                                            <?php if(isset($_SESSION['user_data']['email'])) { ?>
                                            <li><a onclick="addtocart(<?php echo $data['product_id'] ?>,1)"><i
                                                        class="fa fa-shopping-cart"></i></a></li>

                                            <?php }else{?>

                                            <li><a href="signin.php?info=Firstly signin then addtocart product"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <?php }
                            
                            ?>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#"><?php echo $data["product_name"]?></a></h6>
                                        <div class="container">

                                            <div class="row justify-content-between">
                                                <div class="col-md-6">
                                                    <h5><del
                                                            class="text-danger">Rs:<?php echo $data["product_price"]?></del>
                                                    </h5>

                                                </div>
                                                <div class="col-md-6">

                                                    <h5>Rs:<?php echo $data["special_price"]?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>

                    </div>
                    <!-- <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <?php
        include_once "footer.php";
    ?>
    <!-- Footer Section End -->



</body>

</html>