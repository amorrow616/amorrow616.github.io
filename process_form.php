<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Your email address where you want to receive messages
    $to = "a.holahan7@yahoo.com";

    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject";

    // Email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message";

    // Headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    mail($to, $email_subject, $email_body, $headers);

    // Redirect back to the form after submission
    header("Location: index.html?success=true");
} else {
    // Handle the case when the form is not submitted
    header("Location: index.html?success=false");
}
?>
