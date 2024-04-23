<?php
if (isset($_POST['cart_id'])) {
    session_start();
    include_once '../Admin/dbcontroller.php';
    $handle = new DBcontroller();
    $cart_id = $handle->secure($_POST['cart_id']);
    $query = "delete from addtocart where cart_id='$cart_id'";
    $result = $handle->executequery($query);
    $query1 = "select * from registration where email='" . $_SESSION['user_data']['email'] . "'";
$fetch2 = $handle->fetchresult($query1);
$user_id = $fetch2['registration_id'];
    $count=$handle->numrows("select * from addtocart where registration_id='$user_id' and status='pending'");
    if($count>0){
    if ($result) {
    }
    else{

    }
    
}else{

        ?>

        <center>
			<div class="alert alert-dark text-center">No Cart Item are available</div>
 </center>
 <?php }

    
}
         ?>