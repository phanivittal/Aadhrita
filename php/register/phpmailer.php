<?php
require '../phpmailer/phpmailer/PHPMailerAutoload.php';
$otp = mt_rand(100000, 999999);
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='mvgrce17331a0564@gmail.com';
$mail->Password='mailpassword';

$mail->setFrom('mvgrce17331a0564@gmail.com','aadhrita2020');
$mail->addAddress($_POST['email']);


$mail->isHTML(true);
$mail->Subject =' OTP For registration of aadhrita2020 ';
$mail->Body='<h3> AADHRITA2020 OTP : '.$otp.'</h3>';
$mail->send();
?>