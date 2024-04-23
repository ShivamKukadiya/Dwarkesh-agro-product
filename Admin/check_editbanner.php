<?php
include_once 'dbcontroller.php';

if (isset($_POST['editbanner'])) {
    $handle = new DBcontroller();
    $banner_id = $handle->secure($_POST['banner_id']);
  
    $banner_caption = $handle->secure($_POST['banner_caption']);
    $banner_sub_caption = $handle->secure($_POST['banner_sub_caption']);
    $banner_index = $handle->secure($_POST['banner_index']);
    $convert = trim($_POST['convert']);
    $files = time() . ".jpg";
    $image_O = "T" . $files;
    $image_C = "TH" . $files;
    if($_FILES['banner_image']['name'] != "") {
        if ($_FILES['banner_image']['type'] != 'image/png' && $_FILES['banner_image']['type'] != 'image/jpg' && $_FILES['banner_image']['type'] != 'image/jpeg') {
            header('Location:edit_banner.php?message=Please select only png,jpg and jpeg format');
        } else {

            $originalpath = "bannerimages/original/";
            $convertedpath = "bannerimages/convert/";
            move_uploaded_file($_FILES['banner_image']['tmp_name'], $originalpath . $image_O);
            if ($_POST['convert'] == 'Y') {

                include_once 'simpleimage.php';
                $image = new SimpleImage();
                $image->load($originalpath . $image_O);
                $image->resize(330, 420);
                $image->save($convertedpath . $image_C);
                $image = imagecreatefromjpeg($convertedpath . $image_C);
                $destination = $convertedpath . $image_C;
            } else {
                copy($originalpath . $image_O, $convertedpath . $image_C);
            }
            $query = "update banner set `banner_caption`='$banner_caption',`banner_sub_caption`='$banner_sub_caption',`banner_image`='$files', `convert`='$convert',`banner_index`='$banner_index',`status`='active' where banner_id='$banner_id'";
            $result = $handle->executequery($query);
            if ($result) {
                header('Location:view_banner.php?message=success');
            } else {
                header('Location:edit_banner.php?message=Data is not inserted');
            }
        }
    } else {
        $query = "update banner set `banner_caption`='$banner_caption',`banner_sub_caption`='$banner_sub_caption', `convert`='$convert',`banner_index`='$banner_index',`status`='active' where banner_id='$banner_id'";

        
        $result = $handle->executequery($query);
        if ($result) {
            header('Location:view_banner.php?message=success');
        } else {
            header('Location:edit_banner.php?message=Data is not inserted');
        }
    }
} else {
    header('Location:view_banner.php?message=Wrong button press');
}
