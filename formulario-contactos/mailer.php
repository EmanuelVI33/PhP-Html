<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
    
function sendMail($subject, $body, $email, $name, $html = false) {

    // Configuraciones servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';  
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 465;
    $phpmailer->SMPTSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Username = 'emanuelvaca39@gmail.com';
    $phpmailer->Password = 'stulhmwwslotqpbi';

    // Enviar correo
    $phpmailer->setFrom('user@example.com', 'Mailer');   // El que envia
    $phpmailer->addAddress($email, $name);  // El que recibe el correo

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);                                  // Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    $phpmailer->send();
}

?>