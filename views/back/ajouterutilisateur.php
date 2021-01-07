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

    isset($_POST["password1"]) &&
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
        !empty($_POST["tel"]) &&

        (($_POST["nom"][0]>='A') && ($_POST["nom"][0]<='Z'))&&
        (($_POST["prenom"][0]>='A') && ($_POST["prenom"][0]<='Z'))&&
        (($_POST["login"][0]>='A') && ($_POST["login"][0]<='Z'))&&
        (($_POST["tel"]>=20000000) && ($_POST["tel"]<=99999999))&&
        ($_POST["password"]==$_POST["password1"])
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
    else if (($_POST["nom"][0]<'A') && ($_POST["nom"][0]>'Z'))
        $error = "le nom doit commencer par une majuscule";
    else if (($_POST["prenom"][0]<'A') && ($_POST["prenom"][0]>'Z'))
        $error = "le prenom doit commencer par une majuscule";
    else if (($_POST["login"][0]>='A') && ($_POST["login"][0]<='Z'))
        $error = "le login doit commencer par une majuscule";
    else if (($_POST["tel"]<20000000) && ($_POST["tel"]>99999999))
        $error = "le numero doit être de 8 chiffres commençant par 2";
    else if ($_POST["password"]!=$_POST["password1"])
        $error = "le mot de passe doit être le même dans la confirmation";

}


?>





