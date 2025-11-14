<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.titan.email';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contato@trainningonline.vetor256.com'; // seu email completo
    $mail->Password   = 'Portal@Vetor256';     // senha do Titan
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // conexão segura SSL
    $mail->Port       = 465; // porta SSL recomendada

    $mail->setFrom('contato@trainningonline.vetor256.com', 'PoratlVetor256');
    $mail->addAddress('contato@trainningonline.vetor256.com'); // destinatário
    $mail->addReplyTo($_POST['email_msg'], $_POST['nome_msg']);

    $mail->isHTML(false);
    $mail->Subject = 'Nova mensagem de contato';
    $mail->Body    = "Nome: {$_POST['nome']}\nEmail: {$_POST['email']}\n\nMensagem:\n{$_POST['mensagem']}";

    $mail->send();
    echo "<script>alert('Email enviado com sucesso!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=contato.php'>";
} catch (Exception $e) {
    echo "<pre>Erro ao enviar: {$mail->ErrorInfo}</pre>";
}
?>