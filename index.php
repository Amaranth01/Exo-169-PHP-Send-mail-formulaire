<form action="register.php" method="post">
    <input type="email" name="email" value="email">
    <input type="textarea" name="message" value="message">
    <input type="submit" value="envoyer">
</form>

<?php

$mail = trim($_POST["email"]);
if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "L'email est bonne !";
}
elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "L'email n'est pas valide !";
}

if (isset($_GET['email'])) {
    echo " Il y a eu une erreur lors de l'envoie du mail !";
}
elseif (isset($_GET["email"])){
    echo " Le mail a été envoyé avec succés!";
}
?>