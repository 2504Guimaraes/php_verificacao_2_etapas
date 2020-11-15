<?php

require_once 'PHPMailer/PHPMailerAutoload.php';
require_once 'src/main/configEmail.php';

$config = new ConfigEmail(
    "Testando Email p/ Matéria do Claudio",
    "Seu email foi enviado corretamente! :D"
);

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = $config->get_EmailEnviante();
$mail->Password = $config->get_SenhaEmailEnviante();
$mail->SetFrom($config->get_EnviadoPor());
$mail->Subject = $config->get_AssuntoEmail();
$mail->Body = $config->get_CorpoEmail();
$mail->AddAddress($config->get_EmailDestino());

$mail->Send();

?>