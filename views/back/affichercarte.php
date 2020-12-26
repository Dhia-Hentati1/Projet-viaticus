<?php
include_once 'C:/wamp64/www/projet/controller/UtilisateurC.php';
include_once 'C:/wamp64/www/projet/model/utilisateur.php';

$carteC=new CarteC();
$listeCarts=$carteC->affichercarte();

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Afficher Liste Cartes </title>
</head>
<body>
<button><a href="http://localhost/projet/views/back/ajoutercarte.php">Ajouter une carte</a></button>
<hr>
<table border=1 align = 'center'>
    <tr>
        <th>Cin</th>
        <th>nombre de pts</th>
        <th>supprimer</th>
        <th>modifier</th>
    </tr>

    <?PHP
    foreach($listeCarts as $cart){
        ?>
        <tr>
            <td><?PHP echo $cart['cin']; ?></td>
            <td><?PHP echo $cart['pts']; ?></td>
            <td>
                <a href="supprimercarte.php?id=<?PHP echo $cart['cin']; ?>"> supprimer </a>
            </td>
            <td>
                <a href="modifiercarte.php?id=<?PHP echo $cart['cin']; ?>"> Modifier </a>
            </td>
        </tr>
        <?PHP
    }
    ?>
</table>
</body>
</html>
