<?php
include_once 'dbcontroller.php';

if (isset($_POST['submitbanner'])) {
    if ($_FILES['banner_image']['name'] != "") {
        if ($_FILES['banner_image']['type'] != 'image/png' && $_FILES['banner_image']['type'] != 'image/jpg' && $_FILES['banner_image']['type'] != 'image/jpeg') {
            header('Location:add_banner.php?message=Please select only png,jpg and jpeg format');
        } else {
            $handle = new DBcontroller();
            $banner_caption = $handle->secure($_POST['banner_caption']);
            $banner_sub_caption = $handle->secure($_POST['banner_sub_caption']);
            $banner_index = $handle->secure($_POST['banner_index']);
            $convert = trim($_POST['convert']);
            $files = time() . ".jpg";
            $image_O = "T" . $files;
            $image_C = "TH" . $files;
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
            $query = "insert into banner(`banner_caption`,`banner_sub_caption`,`banner_image`,`convert`,`banner_index`,`status`) values('$banner_caption','$banner_sub_caption','$files','$convert','$banner_index','active')";
            $result = $handle->executequery($query);
            if ($result) {
                header('Location:view_banner.php?message=success');
            } else {
                header('Location:add_banner.php?message=Data is not inserted');
            }
        }
    } else {
        header('location:add_banner.php?message=Please select image....');
    }
} else {
    header('Location:view_banner.php?message=Wrong button press');
}
