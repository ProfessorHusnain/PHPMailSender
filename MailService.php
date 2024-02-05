<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

function sendEmail($to, $subject, $htmlBody = null, $textBody = null, $from = 'jetbrainsthunder@gmail.com', $fromName = 'Professor Husnain') {
    $mail = new PHPMailer(true); // true enables exceptions

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jetbrainsthunder@gmail.com';
        $mail->Password = 'ityi lfuc smix vqsd';
        $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' based on your server configuration
        $mail->Port = 587; // Use the appropriate port for your server

        $mail->setFrom($from, $fromName);
        $mail->addAddress($to);
        $mail->Subject = $subject;

        // Set the HTML body if provided
        if ($htmlBody !== null) {
            $mail->isHTML(true);
            $mail->Body = $htmlBody;
        }

        // Set the plain text body if provided
        if ($textBody !== null) {
            $mail->AltBody = $textBody;
        }

        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}

?>
