<?php
include "PHPMailer.php";
include "SMTP.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "ramonantoniosantoscuevas73@gmail.com";
$mail->Password = "809ramon";
$mail->Subject = "ayuda";
$mail->setFrom("aldayan.avila@gmail.com");
$mail->Body = "coronado paquenos por favor";
$mail->addAddress("aldayan.avila@gmail.com");

if($mail->Send()){
    echo "correo enviado";
}else{
    echo "error";


}








?>