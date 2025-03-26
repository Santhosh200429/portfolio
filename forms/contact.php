<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sandy29at@gmail.com"; // Replace with your real email
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email headers
    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your Message Sent Successfully";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
