<?php

require 'vendor/autoload.php'; // Include the SendGrid library

use SendGrid\Mail\Mail;

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare the email message
$mail = new Mail();
$mail->setFrom("learnwithprayag@gmail.com", "LWP Admin"); // Set your email and name
$mail->setSubject($subject);
$mail->addTo("learnwithprayag@gmail.com", "LWP Admin"); // Set recipient email and name
$mail->addContent("text/plain", "Name: $name\nEmail: $email\n\n$message");

// Set SendGrid API key
$apiKey = 'YOUR_SENDGRID_API_KEY';
$sendgrid = new \SendGrid($apiKey);

// Send the email
try {
    $response = $sendgrid->send($mail);
    if ($response->statusCode() == 202) {
        // If email sent successfully
        echo json_encode(array('success' => true));
    } else {
        // If there's an error
        echo json_encode(array('success' => false, 'message' => 'Failed to send email'));
    }
} catch (Exception $e) {
    // Log any errors
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
}
?>
