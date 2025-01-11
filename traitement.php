<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);

try{
    $mail->isSMTP();
    $mail->Host             = 'smtp.gmail.com';
    $mail->SMTPAuth         = true;
    $mail->Username         = '';
    $mail->Password         = '';
    $mail->SMTPSecure       = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port             = 465;

    //Recipients
    $mail->setForm('from@exemple.com', 'Foyer de Bethanie');
    $mail->addAddress('');
}