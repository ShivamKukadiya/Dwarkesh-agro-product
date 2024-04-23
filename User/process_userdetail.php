<?php 

// echo "<pre>";
// print_r($_POST);
// die();




include_once "../admin/dbcontroller.php";
$handle=new DBcontroller();
session_start();
$email=$_SESSION['user_data']['email'];
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$phone=$_POST["phone"];
// $gender=$_POST["gender"];
$address=$_POST['address'];

$query="update registration set first_name='$f_name',last_name='$l_name',phone_no='$phone',`address`='$address' where registration_id=(select registration_id from registration where `email`='$email')";

$run=$handle->executequery($query);
if($run){
    header("Location:profile.php?info=profile successfully updated");
}


?>