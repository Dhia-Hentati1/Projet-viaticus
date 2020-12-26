<?PHP
include_once 'C:/wamp64/www/projet/controller/UtilisateurC.php';
include_once 'C:/wamp64/www/projet/model/utilisateur.php';

$utilisateurC=new UtilisateurC();
$listeUsers=$utilisateurC->afficherutilisateur();

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Afficher Liste Utilisateurs </title>
</head>
<body>
<button><a href="http://localhost/projet/views/back/examples/user.php">Créer un compte</a></button>
<hr>
<table border=1 align = 'center'>
    <tr>
        <th>Cin</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Login</th>
        <th>Ville</th>
        <th>Tel</th>
        <th>Role</th>
        <th>supprimer</th>
        <th>modifier</th>
    </tr>

    <?PHP
    foreach($listeUsers as $user){
        ?>
        <tr>
            <td><?PHP echo $user['cin']; ?></td>
            <td><?PHP echo $user['nom']; ?></td>
            <td><?PHP echo $user['prenom']; ?></td>
            <td><?PHP echo $user['email']; ?></td>
            <td><?PHP echo $user['login']; ?></td>
            <td><?PHP echo $user['ville']; ?></td>
            <td><?PHP echo $user['tel']; ?></td>
            <td><?PHP echo $user['role']; ?></td>
            <td>
                <a href="supprimerutilisateur.php?id=<?PHP echo $user['cin']; ?>"> supprimer </a>
            </td>
            <td>
                <a href="modifierutilisateur.php?id=<?PHP echo $user['cin']; ?>"> Modifier </a>
            </td>
        </tr>
        <?PHP
    }
    ?>
</table>
</body>
</html>
