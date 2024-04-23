<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include_once "head.php";
    ?>
</head>
<style>
#intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

</style>
<!-- style="background-color:rgba(0,120,0,0.3)" -->
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
    <header>
   <?php
        include_once "header.php";
        include_once "ajax.php";
   ?>
   </header>
   
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php
        include_once "banner.php";
    ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php
                        //include '../Admin/dbcontroller.php';   
                
                        //$obj = new DBcontroller();
                        $query="select * from category where status='active'";
                        $fetch_cat=$obj->fetchall($query);
                        // print_r($fetch_cat);
                        foreach($fetch_cat as $data)
                        {
                        ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="../Admin/categoriesimg/convert/TH<?php echo $data['category_image']?>">
                                <h5><a href="shop.php"><?php echo $data["category_name"]?></a></h5>
                            </div>
                        </div>
                    <?php } ?>
                    

                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <?php
        include_once "product.php";
    ?>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
   
    <!-- Banner End -->

    <?php
        // include_once "advertisement.php";
    ?>

    <!-- Blog Section Begin -->
    <!-- <?php
        // include_once "blog.php";
    ?> -->
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php
        include_once "footer.php";
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    



</body>

</html>