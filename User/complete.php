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
<style>
    .view:hover{
        color:black;
    }
</style>
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
    <section class="instagram spad ">
        <div class="container">
            <div class="section-title">
                <center>
                    <h2>Thank you for your support.</h2></br>
                    <a href="vieworder.php " class="h3 view "> <span>
                            View Order
                        </span></a>
                </center>
                <br>

                <?php
if(isset($_GET["id"])){

    $order_id=$_GET["id"];

                ?>
                <div class="btn btn-primary" onclick="window.location='order_invoice.php?id=<?php echo $order_id?>'">View Bill</div>
<?php }?>
            </div></br>
            <div class="row ">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> Dwarkesh Agro Products</h5>
                    </div>
                </div>
                <div class="col-lg-8  border mb-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="./img/categories/c2.jpeg"  height="240px" width="240px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="./img/categories/c3.jpeg"  height="240px" width="240px" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="../Admin/productimages/convertimages/RC120331922_bulk-fer.png">
                                <img src="./img/categories/c1.png"  height="240px" width="240px" alt="">
                            </div>
                        </div>
                        
                    </div>
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