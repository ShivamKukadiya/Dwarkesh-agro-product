<?php
    include_once "dbcontroller.php";
    print_r($_POST);

    $obj=new DBcontroller();

    $subcategory_name=$obj->secure($_POST["subcategory_name"]);
    $subcategory_description=$obj->secure($_POST["subcategory_description"]);
    
    echo $subcategory_name;
    echo $subcategory_description;

?>