<?php
include_once 'dbcontroller.php';

if (isset($_POST['editsubcategory'])) {
    $handle = new DBcontroller();
    $category_id = $handle->secure($_POST['category_id']);
    $subcategory_id = $handle->secure($_POST['subcategory_id']);
   
    $subcategory_name = $handle->secure($_POST['subcategory_name']);

    $subcategory_des = $handle->secure($_POST['subcategory_des']);
   
        //   echo $category_id;
        //   echo $subcategory_name;
        //   echo $subcategory_des; 
        //   die();
   
        $query = "update subcategory set `subcategory_name`='$subcategory_name', `subcategory_des`='$subcategory_des' ,`category_id`='$category_id',`status`='active' where `subcategory_id`='$subcategory_id'";
        $result = $handle->executequery($query);
        if ($result) {
            header('Location:view_subcategory.php?message=success');
        } else {
            header('Location:edit_subcategory.php?message=Data is not inserted');
        }
    
} else {
    header('Location:view_subcategory.php?message=Wrong button press');
}