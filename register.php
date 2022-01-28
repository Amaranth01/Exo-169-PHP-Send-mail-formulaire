<?php

$to      = trim($_POST["email"]);
$subject = 'Sujet';
$message = htmlentities(trim($_POST["message"]));

if (isset($_POST["email"], $_POST["message"])){
    mail($to, $subject, $message);
}

echo "email parti";