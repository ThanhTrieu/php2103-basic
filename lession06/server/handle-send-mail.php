<?php

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// de su dung dc cac thu vien vua require o tren
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btnSend'])){
    $toEmail = strip_tags($_POST['email'] ?? '');
    $subject = strip_tags($_POST['subject'] ?? '');
    $content = strip_tags($_POST['content'] ?? '');

    if(filter_var($toEmail, FILTER_VALIDATE_EMAIL) && !empty($content) && !empty($subject)){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.googlemail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'testt3h@gmail.com';                     //SMTP username
            $mail->Password   = 'testt3h@*#';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('testt3h@gmail.com', 'PHP2103_Mailer');
            $mail->addAddress($toEmail); //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
            $mail->addAttachment('uploads/nike.png');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);     //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $content;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $send = $mail->send();
            if($send){
                header('Location:../sendmail.php?state=success');
            } else {
                header('Location:../sendmail.php?state=fail');
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        header('Location:../sendmail.php?state=empty');
    }
}