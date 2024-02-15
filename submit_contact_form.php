<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Simple validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill out all fields";
        exit();
    }

    // Email validation (optional, can be done using JavaScript)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address";
        exit();
    }

    // Additional validation can be added as needed

    // Process the form data (send email, save to database, etc.)
    // For example, you can send an email notification
    $to = "your_email@example.com";
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\nMessage: $message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully";
    } else {
        echo "Failed to send message. Please try again later";
    }
}
?>
