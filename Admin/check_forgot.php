<?php
if (isset($_POST['submitnewpass'])) {
    include_once '../Admin/dbcontroller.php';
    $handle = new DBcontroller();
    session_start();
    $email = $_SESSION['email'];
    $new_password = $handle->secure($_POST['new_password']);
    $repeat_password = $handle->secure($_POST['repeat_password']);
    $en_password = md5($repeat_password);
    if ($new_password == $repeat_password) {
        $query = "update registration set password='$en_password' where email='$email'";
        $result = $handle->executequery($query);
        $query2 = "update log_in set password='$en_password' where username='$email' and login_type='customer'";
        $result2 = $handle->executequery($query2);
        if ($result and $result2) {
            header('Location:login.php?message=password successfully reset');
        }
    } else {
        header('Location:createpass.php?message=New password and repeat password are not matched');
    }
} else {
    header('Location:createpass.php?message=wrong button press');
}