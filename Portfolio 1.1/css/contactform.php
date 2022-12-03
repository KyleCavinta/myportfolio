<?php
if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = $_POST['cavintakyle@gmail.com'];
    $header = "From: " . $mailFrom;
    $txt = "You have received an email from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
