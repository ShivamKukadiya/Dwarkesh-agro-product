<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include_once "head.php";
?>
</head>

<body class="bg-white">
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
        .view:hover {
            color: black;
        }
    </style>
    <!-- Header Section Begin -->
    <?php
        include_once "header.php";
        include_once "ajax.php";
    ?>




    <div class="container-fluid">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">


                                <?php 

                          include_once "../admin/dbcontroller.php";
                          $handle=new DBcontroller();
    if(isset($_SESSION['user_data']['email'])){
    $email=$_SESSION['user_data']['email'];
    $query="select * from registration where `email`='$email'";

    $fetch=$handle->fetchresult($query);
  //    echo $fetch["image"];
  //    die();
  // }
        
  if(isset($fetch["image"])){
  ?>
                                <img src="profile/<?php echo $fetch["image"] ?>" alt="Admin" class="rounded-circle"
                                    height="200" width="200px">

                                <?php } 
                          
                          
  }?>
  
                                <div class="mt-3">
                                    <h4><?php echo $fetch["first_name"].' '.$fetch['last_name'] ?></h4>
                                    <p class="text-secondary mb-1"></p>

                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <?php include_once 'sideprofile.php';?>

                    </div>
                </div>
                <div class="col-md-8">

                    <?php
        if(isset($_GET['info'])){
          echo '<div class="alert alert-success">'.$_GET['info'].'</div>';
        }
        
        ?>
                   <div class="card mb-3 border">

<div class="row justify-content-center">

    <?php

// include './admin/dbcontroller.php';
// $handle = new DBcontroller();
$query = "select * from `order` where registration_id=(select registration_id from registration where email='" . $_SESSION['user_data']['email'] . "') order by order_id desc";
 $res = $handle->fetchall($query);


              ?>

            <center>
                <!-- <h3>Order</h3></br> -->
                <a> <span class="h3">
                        View Order
                    </span></a>
            </center>
        </div>
        <div class="table-responsive p-2">
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Product Detail</th>
                        <th scope="col">Price</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Total</th>
                        <th scope="col">Date Time</th>
                        <th>Return Order</th>
                        <th>Cancel Order</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
$i = 1;
foreach ($res as $row2) {
$query = "select addtocart.*,`order`.*,`order_item`.* from addtocart,`order`,`order_item` where addtocart.product_id=`order_item`.product_id and `order`.order_id='" . $row2['order_id'] . "' and `order_item`.order_id='" . $row2['order_id'] . "' and addtocart.registration_id='" . $row2['registration_id'] . "' and addtocart.cart_id=`order_item`.cart_id";


$res2 = $handle->fetchall($query);

$count = count($res2);
$i = 1;
foreach ($res2 as $row) {
  $order_status = $row['or_item_status'];
?>
                    <tr>
                        <?php if ($i == 1) { ?>
                        <td rowspan="<?php echo $count ?>"><?php echo $row['order_id'] ?></td>

                        <?php
          $i++;
      } ?>
                        <td>
                            <img src="../admin/productimages/convertimages/RC<?php echo $row['product_image'] ?>"
                                height="60px" width="60px"><br>
                            <?php echo $row['product_name'] ?>
                        </td>
                        <td><?php echo $row['product_price'] ?></td>
                        <td><?php echo $row['product_qty'] ?></td>
                        <td><?php echo $row['product_price'] * $row['product_qty'] ?></td>
                        <td><?php echo date('d-m-y h:i:s A', strtotime($row['date_time'])); ?>
                        </td>

                        <?php if ($order_status == 'Cancelled' || $order_status == 'Return' || $order_status == 'Pending' || $order_status == 'Processing' || $order_status == NULL) { ?>
                        <td class="invert">
                            <h5>Order is not procced to return.</h5>
                        </td>
                        <?php } else { ?>
                        <td class="invert">
                            <a href="#"
                                onclick="return confirmdata1('<?php echo $order_id; ?>');">
                                Return Order
                            </a>
                        </td>
                        <?php }  ?>
                        <?php if ($order_status == 'Return' || $order_status == 'Pending' || $order_status == 'Processing' || $order_status == NULL) { ?>
                        <td class="invert">
                            <h5>You do not proceed to delete this order.</h5>
                        </td>
                        <?php } else { ?>
                        <td class="invert">
                            <center> <a href="javascript:void(0);"
                                    onclick="return confirmdata('<?php echo $order_id; ?>');">
                                    <div class="rem">
                                        <i style="color:black" class="fa fa-close"></i>
                                    </div>

                                </a></center>
                        </td>
                        <?php } ?>

                    </tr>
                    <?php
}
} ?>

                </tbody>
            </table>
</div>
</div>




                </div>
            </div>

        </div>
    </div>
    <!--================ start footer Area  =================-->
    <?php include_once 'footer.php'?>
    <!--================end footer Area  =================-->
</body>

</html>
<style>
    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }
</style>