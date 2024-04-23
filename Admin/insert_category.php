<?php
    include_once "dbcontroller.php";
    print_r($_POST);

    $obj=new DBcontroller();

    $category_name=$obj->secure($_POST["category_name"]);
    $category_description=$obj->secure($_POST["category_description"]);
    
    echo $category_name;
    echo $category_description;

?>