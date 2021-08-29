<?php 

$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$verify_code=substr(str_shuffle($chars), 0, 6);
  echo $verify_code;

require 'phpmailer/PHPMailerAutoload.php';
$mail = new phpmailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->isHTML();
$mail->Username='ashiksazal510@gmail.com';
$mail->Password='pondith1234';
$mail->SetFrom('');
$mail->Subject='hello world';
$mail->Body=$verify_code;
$mail->AddAddress('sojolislm@gmail.com');

if (!$mail->send()) {
	echo "Not send";
}else{
	echo "Send";
}


 ?>