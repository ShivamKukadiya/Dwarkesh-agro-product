<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['sendmail'])) {

    include '../Admin/dbcontroller.php';
    $handle = new DBcontroller();
    $email = $handle->secure($_POST['username']);
    $query = "select * from registration where email='$email'";
    $result = $handle->fetchresult($query);
    $name = $result['last_name'] . " " . $result['first_name'];
    $count = $handle->numrows($query);



    if ($count > 0) {

        require 'Exception.php';
        require 'PHPMailer.php';
        require 'SMTP.php';

        $mail = new PHPMailer(true);
        session_start();
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'dwarkeshagro08@gmail.com';                     // SMTP username
            $mail->Password   = 'zenjgenkrvpyrbjj';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('dwarkeshagro08@gmail.com', 'Dwarkesh Agro Products');
            $mail->addAddress($email, 'Devanshi Thakkar');     // Add a recipient
            $_SESSION['info'] = "Check your mail to forget password";
            $_SESSION['otpforget'] = rand(111111, 999999);
            $_SESSION['email'] = $email;
            $otp = $_SESSION['otpforget'];
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Password Reset";
            $mail->Body    = " Hi," . $name . "</br>  OTP is: " . $otp;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            header('Location:otpforgot.php');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        header('Location:forget.php?message=User not exist');
    }
} else {
    header('Location:forget.php?message=wrong button pressed');
}