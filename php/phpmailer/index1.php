
<?php 
$otp = mt_rand(1000000, 9999999);

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->port=465;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='mvgrce17331a0564@gmail.com';
$mail->Password='Hemanth@2000';

$mail->setFrom('mvgrce17331a0564@gmail.com','nani');
$mail->addAddress($_POST['e1']);


$mail->isHTML(true);
$mail->Subject ='otp';
$mail->Body=$otp;
if(!$mail->send())
{
	echo "error";
}
else
{
	echo "success";
}


?>
