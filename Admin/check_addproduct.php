<?php
include_once 'dbcontroller.php';
$handle = new DBcontroller();
$subcategory_id = $handle->secure($_POST['subcategory_id']);
$product_name = $handle->secure($_POST['product_name']);
$product_des = $handle->secure($_POST['product_description']);
$product_price = $handle->secure($_POST['price']);
$special_price = $handle->secure($_POST['special_price']);
$product_qty = $handle->secure($_POST['qty']);

$q = "select * from product where product_name='$product_name' and subcategory_id='$subcategory_id'";
$count = $handle->numrows($q);
if ($count == 0) {
    if (isset($_POST['submitproduct'])) {
        if ($_FILES['product_image']['name'] != "") {
            if ($_FILES['product_image']['type'] != 'image/png' && $_FILES['product_image']['type'] != 'image/jpg' && $_FILES['product_image']['type'] != 'image/jpeg') {
                header('Location:add_product.php?message=Please select only png,jpg and jpeg format'); 
            } else {

                $convert = trim($_POST['convert']);
                $files1 = rand(111111111, 999999999) . '_' . $_FILES['product_image']['name'];
                $product_image_O = "R" . $files1;
                $product_image_C = "RC" . $files1;

                $originalpath = "productimages/original/";
                $convertedpath = "productimages/convertimages/";
                move_uploaded_file($_FILES['product_image']['tmp_name'], $originalpath . $product_image_O);

                if ($_POST['convert'] == 'Y') {


                    include_once 'simpleimage.php';
                    $image = new SimpleImage();
                    $image->load($originalpath . $product_image_O);
                    $image->resize(700, 750);
                    $image->save($convertedpath . "$product_image_C");
                    $image = imagecreatefromjpeg($convertedpath  . "$product_image_C");
                    $destination = $convertedpath . "$product_image_C";
                    
                } 
                else 
                {
                    copy($originalpath . "$product_image_O", $convertedpath . "$product_image_C");
                }
                $query="INSERT INTO `product`(`product_name`, `product_des`,`qty` ,`product_img`, `convert`, `status`, `product_price`, `special_price`, `subcategory_id`) VALUES ('$product_name','$product_des','$product_qty','$files1','$convert','active','$product_price','$special_price','$subcategory_id')";

                // $query = "insert into product(`product_name`,`product_des`,`product_image`,`convert`,`price`,`qty`,`status`,`subcategory_id`) values('$product_name','$product_des','$files1','$convert','$product_price','$product_qty','active','$subcategory_id')";
                $result = $handle->executequery($query);
                if ($result) {
                    header('Location:view_product.php?message=success');
                } else {
                    header('Location:add_product.php?message=Data is not inserted');
                }
            }
        } else {
            header('location:add_product.php?message=Please select image....');
        }
    } else {
        header('Location:view_product.php?message=Wrong button press');
    }
} else {
    header('location:add_product.php?message=Product aleardy exist....');
}

