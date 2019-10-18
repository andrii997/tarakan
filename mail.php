<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$phone = $_POST['user_phone'];




$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров
$mail->Host = 'smtp.gmail.com'; 					  // Specify main and backup SMTP servers


$mail->Username = 'dezukraine@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Sqjf1485'; // Ваш пароль от почты с которой будут отправляться письма

$mail->setFrom('dezukraine@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('dezukraine@gmail.com');     // Кому будет уходить письмо 


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с ленда';
$mail->Body    = "\nТелефон: " .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>