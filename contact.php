<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace "your_email@example.com" with your desired email address to receive the contact form submissions.
    $to = "jnwanya10@gmail.com";
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully.
        // You can redirect the user to a thank-you page or display a success message.
        header("Location: thank_you.html");
        exit();
    } else {
        // Email failed to send.
        // You can redirect the user to an error page or display an error message.
        header("Location: error.html");
        exit();
    }
}
?>