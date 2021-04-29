<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPKeepAlive=true;
$mail->SMTPAuth=true;
$mail->SMTPSecure ='tls';

$mail->Port=587;
$mail->Host = "smtp.gmail.com";

$mail->Username = "epostadeneme100@gmail.com";
$mail->Password ="deneme123";

$mail->setform()



?>