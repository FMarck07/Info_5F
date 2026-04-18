<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __DIR__. '/vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = "francesco.marchetto@iisviolamarchesini.edu.it";
    $mail -> Password = 'otst chvk tcjq ajji';
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail -> Port = 587;
    $mail -> setFrom('francesco.marchetto@iisviolamarchesini.edu.it');
    $mail -> addAddress('riccardo.merlo@iisviolamarchesini.edu.it');
    $mail -> Subject = 'Test';
    $mail -> Body = 'ciao';
    $mail -> CharSet = 'UTF-8';
    $mail -> Encoding = 'base64';
    $mail -> send();
    echo "Mail mandata con successo";
}catch (Exception $e){
    echo "Errore nell'invio dell'mail";
}