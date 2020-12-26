<?php
include "C:/wamp64/www/projet/controller/UtilisateurC.php";

$carteC=new carteC();

if (isset($_GET["id"])){
    $carteC->supprimercarte($_GET["id"]);
    header('Location:examples/table2.php');
}



?>
