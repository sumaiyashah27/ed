<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "octacoders27@gmail.com";  // Your email
    $subject = "New Contact Form Message";
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
