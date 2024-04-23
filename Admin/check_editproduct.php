    <?php
    include_once 'dbcontroller.php';
    if (isset($_POST['submiteditproduct'])) {
        $handle = new DBcontroller();
        $product_id = $handle->secure($_POST['product_id']);
        //$category_id = $handle->secure($_POST['category_id']);
        $subcategory_id = $handle->secure($_POST['subcategory_id']);

        $product_name = $handle->secure($_POST['product_name']);
        $product_des = $handle->secure($_POST['product_des']);
        $convert = trim($_POST['convert']);
        $product_price = $handle->secure($_POST['product_price']);
        $special_price = $handle->secure($_POST['special_price']);
        $product_qty = $handle->secure($_POST['qty']);
        $special_price = $handle->secure($_POST['special_price']);

        if ($_FILES['image1']['name'] != '') {
            if ($_FILES['image1']['type'] != 'image/png' && $_FILES['image1']['type'] != 'image/jpg' && $_FILES['image1']['type'] != 'image/jpeg') {
                header('Location:edit_product.php?message=Please select only png,jpg and jpeg format in image1&product_id=' . $product_id);
            } else {
                $files1 = rand(111111111, 999999999) . '_' . $_FILES['image1']['name'];
                $image1_O = "R" . $files1;
                $image1_C = "RC" . $files1;
                $originalpath = "productimages/original/";
                $convertpath = "productimages/convertimages/";
                move_uploaded_file($_FILES['image1']['tmp_name'], $originalpath . $image1_O);
                if ($_POST['convert'] == "Y") {
                    // echo "string";
                    // die();
                    include_once 'simpleimage.php';
                    $image = new SimpleImage();
                    $image->load($originalpath . $image1_O);
                    $image->resize(550, 550);
                    $image->save($convertpath . "$image1_C");
                    $image = imagecreatefromjpeg($convertpath  . "$image1_C");
                    //	$destination = $convertpath . "$image_C";
                } else {
                    copy($originalpath . $image1_O, $convertpath . "$image1_C");
                }
                $query = "update product set `product_name`='$product_name',`product_des`='$product_des',`product_img`='$files1',`convert`='$convert',`product_price`='$product_price',`qty`='$product_qty',`special_price`='$special_price',`status` ='active',`subcategory_id`='$subcategory_id' where `product_id`='$product_id'";
            }
        }else {
            $query = "update product set `product_name`='$product_name',`product_des`='$product_des',`convert`='$convert',`product_price`='$product_price',`qty`='$product_qty',`special_price`='$special_price',`status`='active',`subcategory_id`='$subcategory_id' where `product_id`='$product_id'";
        }
        $result = $handle->executequery($query);
        if ($result) {
            header('Location:view_product.php?message=success');
        } else {
            header('Location:view_product.php?message=data is not update');
        }
    } else {
        header('Location:view_`product.php?message=Wrong button press');
    }
?>
