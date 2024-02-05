<?php

require 'MailService.php';

// Example usage:
$to = 'moazewasim0@gmail.com';
//$to = 'mh571536@gmail.com';
$subject = 'PHP Mail Sender';
$htmlBody = '<p>This is an HTML email with a <strong>bold</strong> message.</p>';
$textBody = 'This is the plain text version for email clients that do not support HTML.';

if (sendEmail($to, $subject,$htmlBody, $textBody)) {
    echo 'Email sent successfully';
} else {
    echo 'Error sending email';
}
