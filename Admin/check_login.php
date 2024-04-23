<?php
    include_once 'dbcontroller.php';
    $obj= new DBcontroller();
    $name=$obj->secure ($_POST['username']);
    $password=$obj->secure ($_POST['password']);
    $new_password=md5($password );
    // echo $new_password;
    // die();
    
    $query="select * from log_in where `username`='$name' and `login_type`='admin'";
    $result= $obj->executequery($query);
    $count=$obj->numrows($query);
    //echo $count;
        if($count>0){
            $query1="select * from log_in where `username`='$name' and `login_type`='admin'and `password`='$new_password'";
            $count1=$obj->numrows($query1);
            if($count1>0){
                session_start();
                $_SESSION['email']=$name;
                header('location:dashboard.php?success=log in ');

            }
            else{
                header('location:login.php?error=Password not matched');

            }
        }
        else{
            header('location:login.php?error=Username not matched');
        }
        if($count==0)
        {
            header('location:login.php?error=Please enter Username OR Password ');
        }
   // echo $password;
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

?>