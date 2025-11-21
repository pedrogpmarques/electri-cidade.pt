<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $business = $_POST['business'];
    $emailInfo = $_POST['mail'];
    $phoneNumber = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "geral@electri-cidade.pt"
    $headers = "From: ".$emailInfo
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($emailInfo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>