<?php
include "PHPMailer.php";
include "SMTP.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$imail=$_POST['correo'];
$Subject=$_POST['asunto'];
$Body=$_POST['mensaje'];


$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "ramonantoniosantoscuevas73@gmail.com";
$mail->Password = "809ramon";
$mail->isHTML(true);
$mail->setFrom($imail);
$mail->Subject = $Subject;
$mail->Body = $Body;
$mail->addAddress($imail);

if($mail->Send()){
    echo'<script type="text/javascript">
    alert("Mensaje enviado");
    window.location.href="../../enviar correo.html"
    </script>';
}else{
    echo "error";


}
