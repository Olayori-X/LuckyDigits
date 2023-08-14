<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

session_start(); 
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username= '[Email to send mail]'; //Email to send mail
    $mail->Password = 'Password'; //Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('[Email to send mail]'); //Email to send mail

    // $mail->addAddress($email);

    $mail->isHTML(true);

    /*if(isset($_POST['signup-email'])){
        $email = $_POST['signup-email'];//Still need to do a lot of validation here
        $mail->Subject = "Link to change your password";
        $mail->Body = "Click <a href = 'localhost/LuckyDigits/completereg.php?key=$email'>here</a> to verify your email";
    }
    elseif(isset($_POST[''])){
        $email = $_POST['signup-email'];//Still need to do a lot of validation here
        $mail->Subject = "Link to change your password";
        $mail->Body = "Click <a href = 'localhost/LuckyDigits/completereg.php?key=$email'>here</a> to verify your email";
    }
    $mail->send();

    echo
    "
    <script>
    alert('Link to verify your email has been sent to your email');
    document.location.href = 'ForgotPassword.php';
    </script>
    ";*/
?>