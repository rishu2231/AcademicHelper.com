<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer\SMTP.php";
require "PHPMailer\Exception.php";
require "PHPMailer\PHPMailer.php";

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

//require PHPMailer/autoload.php";

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "priya223117@gmail.com";
$mail->Password = "czupppdtuixmvtwv";
$mail->setFrom($email, $name);
$mail->addAddress("priya223117@gmail.com", "priya");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->send();
echo "message send successfully";
 
?>
