<?php
    session_start();
    include_once '../Admin/dbcontroller.php';
    $obj=new DBcontroller();

    $email = $_SESSION['user_data']['email'];
    $query = "update registration set status='signout' where email='$email'";
    $run=$obj->executequery($query);
    unset($_SESSION['user_data']);
    header('location:signin.php?info=User Signout Successfully');
    
?>