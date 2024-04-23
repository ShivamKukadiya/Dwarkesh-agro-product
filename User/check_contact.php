<?php
// print_r($_POST); 
// die();
    include_once '../Admin/dbcontroller.php';
    $obj= new DBcontroller();
    $email=$obj->secure($_POST['email']);
    $message=$obj->secure($_POST['message']);
    $rating=$obj->secure($_POST['whatever1']);

    //  print_r($_POST);
    //  die();
    $query="insert into contact (`email`,`message`,`rating`) values('$email','$message','$rating')";
    $result=$obj->executequery($query);
    if($result){
         header('location:contact.php?success='. $email.' your request is submited..');
    }else{
        header('location:contact.php?success='. $email.'Please Enter Correct Detail');
    }

?>
