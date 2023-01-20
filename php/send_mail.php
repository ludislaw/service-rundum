<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/Exception.php";

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $body = $name . ' ' . $email . ' ' . $phone . ' ' . $message;
    $theme = "[Заявка с формы]";

    $mail->addAdress("vladderevo2004de@gmail.com");
    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();