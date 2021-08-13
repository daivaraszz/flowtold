<?php 

if (isset($_POST['submit'])) {
    $mailFrom = $_POST['mail'];
    $valueOfOptions = $_POST['options'];
    $message = $_POST['message'];

    $mailTo = "info@flowtold.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received e-mail from ".$name.".\n\n".$message."\n\n".$valueOfOptions;

    mail($mailTo, $txt, $headers, $valueOfOptions);
    header("Location: index.html");
}