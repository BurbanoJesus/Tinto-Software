<?php
include_once $_SERVER['DOCUMENT_ROOT']."/tintosoft/application/settings.php";
include_once LIBS.'helper.php';
include_once LIBS.'validate.php';

require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Plataforma\Libs\Helper;
use Plataforma\Libs\Validate;

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$subject = 'Cotizacion';
$template = '<div style="color: #5C5C5C; font-size: 20px;">Nombre: '.$nombre.'<br>Telefono: '.$telefono.'<br> Correo: '.$correo.'<br> Mensaje: '.$mensaje.'</div>';

$mail = new PHPMailer;
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'cotizaciones.tinto@gmail.com';
$mail->Password = '@Tinto2020';

$mail->setFrom('cotizaciones.tinto@gmail.com', 'Cotizacion');
$mail->addAddress('jesusburbano10@hotmail.com', $nombre);
$mail->Subject = $subject;
$mail->msgHTML($template);
if (!$mail->send()) {
    // echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    // echo 'Message sent!';
}

// 
$url_redirect = HOST.'inicio';
$active = 'contactanos';
$titulo = 'Su mensaje ha sido enviado exitosamente, nos pondremos en contacto lo mas pronto posible';

header("Location: ".HOST."success?&url_redirect=$url_redirect&active=$active&titulo=$titulo");
exit;

?>