<?php
if (isset($_POST['submit'])) {

    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['subject'], $_POST['message']) ) {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        $to = "safiyamelmi19@gmail.com";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $body = "Name: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . 
        "\nSubject: " . $subject . "\n\nMessage:\n" . $message;

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully.";
        } else {
            echo "Message failed to send.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>