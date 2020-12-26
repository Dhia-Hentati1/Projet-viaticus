<?PHP
include "C:/wamp64/www/projet/controller/UtilisateurC.php";

$utilisateurC=new utilisateurC();

if (isset($_GET["id"])){
    $utilisateurC->supprimerutilisateur($_GET["id"]);
    header('Location:examples/tables.php');
}



?>