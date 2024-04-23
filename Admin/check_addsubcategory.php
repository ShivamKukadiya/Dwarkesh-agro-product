<?php
include_once 'dbcontroller.php';

if (isset($_POST['submitsubcategory']))
{
    
            $handle = new DBcontroller();
            $subcategory_name = $handle->secure($_POST['subcategory_name']);
            $subcategory_des = $handle->secure($_POST['subcategory_des']);
            $category_id=$handle->secure($_POST['category_id']);
            
            $query = "insert into subcategory(`subcategory_name`,`subcategory_des`,`status`,`category_id`) values('$subcategory_name','$subcategory_des','active','$category_id')";
            $result = $handle->executequery($query);
            if ($result) {
                header('Location:view_subcategory.php?message=success');
            } else {
                header('Location:add_subcategory.php?message=Data is not inserted');
            }
}
else
{
    header('Location:view_subcategory.php?message=Wrong button press');
}
