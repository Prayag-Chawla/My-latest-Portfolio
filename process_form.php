<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["full_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate and sanitize data
    // ...

    // Send email
    $to = "recipient@example.com";
    $subject = "Contact Form Submission from $fullName";
    $headers = "From: $email";
    $mailBody = "Name: $fullName\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
