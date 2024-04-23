<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All Product</li>
                        <?php //$obj = new DBcontroller();
                        $query="select * from category where status='active'";
                        $fetch_cat=$obj->fetchall($query);
                        // print_r($fetch_cat);
                        
                        foreach($fetch_cat as $data)
                        {
                            
                            $cat_n=str_replace(" ","_",$data["category_name"]);
                        
                            ?>

                        <li data-filter=".<?php echo $cat_n?>"><?php echo $data["category_name"] ?>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            
            <?php 
            $query = "select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id limit 12";
								$fetch=$obj->fetchall($query);
  foreach($fetch as $data)
                        {
                            
                            
                            
                            $cat_n=str_replace(" ","_",$data["category_name"]);?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $cat_n ?>">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg"
                        data-setbg="../Admin/productimages/convertimages/RC<?php echo $data["product_img"]?>">
                        <ul class="featured__item__pic__hover">
                            <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                            <li><a href="shop-details.php?p_id=<?php echo $data['product_id']?>"><i
                                        class="fa fa-retweet"></i></a></li>
                                        <?php if(isset($_SESSION['user_data']['email'])) { ?>
                            <li><a onclick="addtocart(<?php echo $data['product_id'] ?>,1)"><i class="fa fa-shopping-cart"></i></a></li>

                            <?php }else{?>

                                <li><a href="signin.php?info=Firstly signin then addtocart product"><i class="fa fa-shopping-cart"></i></a></li>
                            <?php }
                            
                            ?>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?php echo $data["product_name"]?></a></h6>
                        <div class="container">

                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <h5><del class="text-danger">Rs:<?php echo $data["product_price"]?></del></h5>

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
    </div>
</section>