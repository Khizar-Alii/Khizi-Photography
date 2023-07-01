<?php






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "jacopo.portfolio@gmail.com , contact@jacopoagostini.com"; 
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<div class='u-form-send-message u-form-send-success'>Thank you! Your message has been sent.</div>";
    } else {
        echo "<div class='u-form-send-error u-form-send-message'>Unable to send your message. Please fix errors then try again.</div>";
    }
}

?>