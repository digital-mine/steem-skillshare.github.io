<?php
$to      = 'digitalmine23@gmail.com';
$subject = 'TEST SUBJECT';
$message = 'hello';
$headers = 'From: digitalmine23@gmail.com' . "\r\n" .
    'Reply-To: digitalmine23@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
