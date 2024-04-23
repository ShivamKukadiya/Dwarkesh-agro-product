<?php
session_start();
if (isset($_POST['insertbilling'])) {
  
        include_once "../admin/dbcontroller.php";
        $obj = new DBcontroller();

        $name = $_POST['f_name'] . " " . $_POST['l_name'];
        // $country = $_POST['country'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $phone = $_POST['phonenumber'];
        //$mode = $_POST['mode'];
        // session_start();
        $email = $_SESSION['user_data']['email'];
       
        $email2= $_POST['email'];
        $_SESSION["em2"]=$email2;
        $query = "select * from registration where email='$email'";
        $fetch = $obj->fetchresult($query);
        // $_SESSION['product_id'] = $_POST['product_id'];
        $registration_id = $fetch['registration_id'];

        $res = $_SESSION['cart'];
        // print_r($res);
        // die();
    $total_amount=0;
    foreach ($res as $row) {
        $total_amount = $total_amount + ($row['product_price'] * $row['product_qty']);
        // $registration_id = $row['reg_id'];
    }
    $paise=$total_amount*100;
    // echo $paise;


        if ($_POST['mode'] == 'COD') {
        $query2 = "insert into billing(`name`,`address`,`city`,`state`,`pincode`,`phone_number`,`email_id`,`registration_id`) values('$name','$address','$city','$state','$pincode','$phone','$email2','$registration_id')";
        $result = $obj->executequery($query2);


        
        if ($result) {
            header('Location:order.php');
        }

    }elseif($_POST['mode'] == 'online'){
        
      
        ?>

   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                    var options = {
                        "key": "rzp_test_M479HuZwFFH7a8", // Enter the Key ID generated from the Dashboard
                        "Amount": "<?php echo $paise; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "Name": "Dwarkesh Agro Products", //your business name
                        "Description": "Order Payment Transaction",
                        "Image": "./images/newlogo.jpg",
                        // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "callback_url": "http://localhost/dwarkesh/dwarkesh/User/insertorder.php?type=online/",
                        "prefill": {
                            "Name": "<?php echo $name ?>", //your customer's name
                            "Email": "<?php echo $email ?>",
                            "Contact": "<?php echo $phone ?>"
                        },
                        "notes": {
                            "address": "Razorpay Corporate Office"
                        },
                        "theme": {
                            "color": "#3399cc"
                        }
                    };
                    <?php 
                        $v=compact("name","address","city","pincode","phone","email","registration_id");
                        $_SESSION['billing_pay']=$v;
                    ?>
                    var rzp1 = new Razorpay(options);
                        rzp1.open();

                        
            </script>

   <?php }
}
