<?php
    if (isset($_POST['cart_id'])) {
        include_once '../ADMIN/dbcontroller.php';
        $handle = new DBcontroller();
        $cart_id = $handle->secure($_POST['cart_id']);
        $product_qty = $handle->secure($_POST['prod_qty']);
        $product_price = $handle->secure($_POST['prod_price']);
        $query = "update addtocart set product_qty='$product_qty' where cart_id='$cart_id'";
        $result = $handle->executequery($query);
        if ($result) {
            $total_price = $product_price * $product_qty;
            echo "Rs. " . $total_price;
        }
    }
