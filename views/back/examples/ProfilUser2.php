<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Utilisateur</title>
</head>
<body>
<button><a href="connexion.php">Déconnecter</a></button>
<hr>
<div align="center" > <?php echo 'Bienvenue cher client, ', $_SESSION['e'];?>
</div>
<?php
// Il est bien connecté
include ('C:/wamp64/www/projet/views/back/examples/tables.php');
?>
</body>
</html>