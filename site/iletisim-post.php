<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

require 'inc/config.php';
if($_POST)
{
   $adsoyad=$_POST['name'];
   $email=$_POST['email'];
   $konu=$_POST['subject'];
   $mesaj=$_POST['message'];
   
   $mail_icerik = "Merhaba yönetici, sitenizden yeni bir iletişim formu gönderildi. Bilgileri aşağıdadır.<br>";
   $mail_icerik .= "Adı Soyadı: $adsoyad<br>";
   $mail_icerik .= "Email: $email<br>";
   $mail_icerik .= "Mesaj konusu: $konu<br>";
   $mail_icerik .= "Mesaj içeriği : $mesaj<br>";
   
   DB::insert("INSERT INTO iletisim(adi_soyadi,email,mesaj,mesaj_konusu) VALUES(?,?,?,?)",array(
       $adsoyad,$email,$mesaj,$konu));
   
   
    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';
   
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;   //SMTP::DEBUG_SERVER;              //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'epostadeneme100@gmail.com';                     //SMTP username
    $mail->Password   = 'deneme123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
       )
      );
    //Recipients
    $mail->setFrom("epostadeneme100@gmail.com", "İletisim Formu");
    $mail->addAddress('emretorun.kku@gmail.com', 'Emre Torun');    
    //$mail->addAddress('birkan.yanar@lazzoni.com.tr', 'Birkan YANAR');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet='UTF-8';
    $mail->Subject = $konu;
    $mail->Body    = $mail_icerik;
    $mail->AltBody = $mail_icerik;

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    die();
}
    header("Location:index.php?sayfa=contact&success=1");
}
?>

