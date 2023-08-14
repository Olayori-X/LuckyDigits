<?php
include "sendmail.php";
include "validate.php";

    if(isset($_POST['signup-email'])){
        $email = validate($_POST['signup-email']);//Still need to do a lot of validation here
        $mail->addAddress($email);
        $mail->Subject = "Link to change your password";
        $mail->Body = "Click <a href = 'localhost/LuckyDigits/completereg.php?key=$email'>here</a> to verify your email";
    }
    $mail->send();

    echo
    "
    <script>
    alert('Link to verify your email has been sent to your email');
    document.location.href = 'signup.php';
    </script>
    ";
?>