<?php
								
                                include '../Admin/dbcontroller.php';

                                $obj = new DBcontroller();
                           
                           session_start();               
                                
                                
                                
                                
                                
                                if(isset($_POST["search"])){
                                    $search=$_POST["search"];
                                            $query7 = "select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id and p.product_name like '%$search%'"; 
                                    
                                    
                                    
                                         }else{
                                         $query7 = "select c.category_id,category_name,s.subcategory_id,subcategory_name, p.* from category c , subcategory s ,product p where c.category_id=s.category_id and s.subcategory_id = p.subcategory_id and s.category_id='".$_POST["cat"]."' and p.subcategory_id='".$_POST["subcat"]."'"; 
                                    // print_r($fetch_prod);
                                    
                                    
                                         }
	                              $fetch_prod = $obj->fetchall($query7);
		                           // print_r($fetch_prod);
	               	               foreach($fetch_prod as $data){
		
		
		                  ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="">
                                <img src="../Admin/productimages/convertimages/RC<?php echo $data["product_img"]?>" alt="">
                                    <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php?p_id=<?php echo $data['product_id']?>"><i class="fa fa-retweet"></i></a></li>

                                    <?php if(isset($_SESSION['user_data']['email'])) { ?>
                            <li><a onclick="addtocart(<?php echo $data['product_id'] ?>,1)"><i class="fa fa-shopping-cart"></i></a></li>

                            <?php }else{?>

                                <li><a href="signin.php?info=Firstly signin then addtocart product"><i class="fa fa-shopping-cart"></i></a></li>
                            <?php }
                            
                            ?>
                                    </ul>
                                </div>
                                <div class="product__item__text">
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