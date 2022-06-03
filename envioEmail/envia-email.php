<?php

$nome=utf8_encode($_POST['nome']);
$sobrenome=utf8_encode($_POST['sobrenome']);
$email=utf8_encode($_POST['email']);
$mensagem=utf8_encode($_POST['mensagem']);

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail=new PHPMailer;
$mail->isSMTP();

//configurações do Servidor do e-mail

$mail->Host="smtp.gmail.com";
$mail->Port="587";
$mail->SMTPSecure="tls";
$mail->SMTPAuth="true";
$mail->Username="vini35634@gmail.com";
$mail->Password="vinicimol";

//configuração da mensagem

$mail->setFrom($mail->Username, "Eduarda Berti"); //remetente
$mail->addAddress("vini35634@gmail.com");
$mail->Subject="Fale conosco";

$conteudo_email="voce recebeu uma mensagem de $nome $sobrenome ($email): <br> <br> Mensagem: <br> $mensagem";

$mail->IsHTML(true);
$mail->Body=$conteudo_email;


if($mail->send()){
    echo "E-mail enviado com sucesso! :)";
}else{
    echo "Falha ao enviar o e-mail. Por Favor, tente novamente :(". $mail->ErrorInfo;
}