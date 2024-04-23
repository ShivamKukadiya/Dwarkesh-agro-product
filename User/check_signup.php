<?php

include '../Admin/dbcontroller.php';
$obj=new DBcontroller();
session_start();
$fname=$obj->secure($_POST['fname']);
$lname=$obj->secure($_POST['lname']);
$email=$obj->secure($_POST['email']);
$address=$obj->secure($_POST['address']);

$phonenumber=$obj->secure($_POST['phonenumber']);
$password=$obj->secure($_POST['password']);
$con_password=$obj->secure($_POST['con_password']);
$gender=$obj->secure($_POST['gender']);
$tmp_name=$_FILES['profile']['tmp_name'];
$enc_password=md5($password);
$name="amb".rand(11111,99999).$_FILES['profile']['name'];
$or_name=$_FILES['profile']['name'];
$img_type=$_FILES['profile']['type'];

$extension=["image/jpg","image/jpeg","image/png"];
if(in_array($img_type,$extension)){
    move_uploaded_file($tmp_name,'profile/'.$name);
     $query="INSERT INTO `registration`(`first_name`, `last_name`, `email`, `gender`, `phone_no`, `password`, `image`, `status`,`address`) VALUES ('$fname','$lname','$email','$gender','$phonenumber','$enc_password','$name','Registerd','$address')";
     $res=$obj->executequery($query);
    
     
     if($res){
        $query="INSERT INTO `log_in`(`username`, `password`, `login_type`,`phone_number`) VALUES ('$email','$enc_password','customer',$phonenumber)";
        $res2=$obj->executequery($query);
        if($res2){
              $_SESSION['user_data'] =compact(["email","fname","lname"]);
              header('Location:index.php');

        }else{

            header('Location:signup.php?info=user not registered successfully');
        }
     }else{
        header('Location:signup.php?info=user not registered successfully');
     }
}else{
    header('Location:signup.php?info=Please select only jpg,jpeg and png file');
}




?>