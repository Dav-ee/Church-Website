<?php
require_once './vendor/autoload.php';
 
try {
    // Create the SMTP Transport
    $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
        ->setUsername('Davieslangat16@gmail.com')
        ->setPassword('kabianga');
 
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
 
    // Create a message
    $message = new Swift_Message();
 
    // Set a "subject"
    $message->setSubject('Demo message using the SwiftMailer library.');
 
    // Set the "From address"
    $message->setFrom(['Davieslangat16@gmail' => 'Davies#1']);
    // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
    $message->addCc('Davies.langatt@gmail', 'Davies#2');
 
    // Set the plain-text "Body"
    $message->setBody("This is the plain text body of the message.\nThanks,\nAdmin");
 
    // Set a "Body"
    $message->addPart('This is the HTML version of the message.<br>Thanks,<br>Admin', 'text/html');
 
    // Send the message
    $result = $mailer->send($message);
} catch (Exception $e) {
  echo $e->getMessage();
}