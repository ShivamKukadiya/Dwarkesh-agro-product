<?php

include '../Admin/dbcontroller.php';
$obj=new DBcontroller();

$email=$obj->secure($_POST['email']);
$password=$obj->secure($_POST['password']);
// echo $email;
// echo $password;
// die();
$enc_password=md5($password);

$query="select * from log_in where `username` = '$email' and `login_type`='customer' ";
$count=$obj->numrows($query);

if($count>0)
{
    $query1="select * from log_in where `username` = '$email'and `password` = '$enc_password' and `login_type`='customer'";
    $count1=$obj->numrows($query1);  
    // echo $count1;
// die();
    if($count1>0){
        session_start();
        $query1="select * from registration where `email` = '$email' or `phone_no` = '$email'and `password`='$enc_password'";
        $fetch = $obj->fetchresult($query1);
        $fname = $fetch['first_name'];
        $lname = $fetch['last_name'];
        $_SESSION['user_data'] =compact(["email","fname","lname"]);
        header('Location:index.php?success='.$email.' Login Successfully');
    }else{
        header('Location:signin.php?info=Please Enter Correct password');         
    }
}
else{
    header('Location:signin.php?info='.$email.' is not Registered');
}





?>