<?php
include_once 'C:/wamp64/www/projet/controller/UtilisateurC.php';
include_once 'C:/wamp64/www/projet/model/utilisateur.php';

$error = "";

$user = null;

$userC = new utilisateurC();
if (
    isset($_POST["cin"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["ville"]) &&
    isset($_POST["tel"])
) {
    if (
        !empty($_POST["cin"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["login"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["ville"]) &&
        !empty($_POST["tel"])
    ) {
        $user = new utilisateur(
            $_POST['cin'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['login'],
            $_POST['password'],
            $_POST['ville'],
            $_POST['tel']



        );
        $userC->ajouterutilisateur($user);
        header('Location:examples/tables.php');
    }
    else
        $error = "Missing information";
}


?>





