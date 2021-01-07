<?php
include_once 'C:/wamp64/www/projet/controller/UtilisateurC.php';
include_once 'C:/wamp64/www/projet/model/utilisateur.php';

$error = "";

$cart = null;

$cartC = new carteC();
if (
    isset($_POST["cin"]) &&
    isset($_POST["pts"])
) {
    if (
        !empty($_POST["cin"]) &&
        !empty($_POST["pts"])
    ) {
        $cart = new carte(
            $_POST['cin'],
            $_POST['pts']
        );
        $cartC->ajoutercarte($cart);
        header('Location:examples/tables.php');
    }
    else
        $error = "Missing information";
}


?>

