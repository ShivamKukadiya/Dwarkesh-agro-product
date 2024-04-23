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
    <!-- Header Section End -->    

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bread.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr >
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            <?php 
                            //include "../Admin/dbcontroller.php";
							$count="";
							if(isset($_SESSION["user_data"]['email'])){
$query="select * from addtocart where status='pending' and  registration_id=(select registration_id from registration where email='" . $_SESSION['user_data']['email'] . "') order by cart_id";
$fetch=$obj->fetchall($query);
$count=$obj->numrows($query);
							}
if($count>0){
$sum=0;

foreach($fetch as $row){
  $image1=$row['product_image'];
 



?>
                                <tr id="delete_<?php echo $row['cart_id']?>">
                                <?php
												$temp_id=$row['product_id'];
												
													$qty_prod="select qty from product where product_id='$temp_id'"; 
													$temp_qty=$obj->fetchresult($qty_prod);
													$temp_qty2=$temp_qty['qty'];
												?>
										<input type="hidden" name="stock_qty"
											id="stock_qty_<?php echo $row['cart_id']; ?>"
											value="<?php echo $temp_qty2 ?>">
										<input type="hidden" id="price_<?php echo $row['cart_id']; ?>"
											value="<?php echo $row['product_price']; ?>">
                                            <input type="hidden" id="cart_id" value="<?php echo $row['cart_id'] ?>">

                                    <td class="shoping__cart__item">
                                        <img src="../Admin/productimages/convertimages/RC<?php echo $image1?>" height="70px" width="80px" alt="">
                                        <h5><?php echo $row["product_name"] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                      <?php echo "Rs. ".$row['product_price'];
                                      $total=$row['product_price']*$row["product_qty"];

                                      
                                      ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                        <button type="button" class="btn btn-dark ite" type="button" onclick="decrementValue()" value="0,<?php echo $row['cart_id']?>" />-</button>
<input type="text" class="py-1" name="quantity" value="<?php echo $row["product_qty"]?>" id="qty1_<?php echo $row['cart_id']; ?>" maxlength="2" max="10" size="1"  />
<button type="button" class="btn btn-dark ite" type="button"  onclick="incrementValue()" value="1,<?php echo $row['cart_id']; ?>" />+</button>
                                        </div>
                                       
                                    </td>
                                    <td class="shoping__cart__total " id="total_<?php echo $row['cart_id']; ?>">
                                       <?php echo "Rs. ".$total;
                                       
                                       $sum+=$total;?>
                                    </td>
                                    <td class="shoping__cart__item__close" style="cursor:pointer" onclick="deletecartproduct(<?php echo $row['cart_id']?>)">
                                      <i class="fa fa-close"></i>
                                    </td>
                                </tr>
                               <?php } }else{ ?>
	
    <center>
       <div class="alert alert-dark">No Cart Item are available</div>
</center>


<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="shop.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <!-- <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                          
                            <li>Total <span id="final"><?php 
                          if(isset($sum)){
                            echo "Rs. ".$sum ;

                          }else{
                            echo 00;
                          }
                            
                            ?></span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php
        include_once "footer.php";
    ?>
    <!-- Footer Section End -->


</body>

</html>