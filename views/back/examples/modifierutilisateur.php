<?php
include "C:/wamp64/www/projet/controller/UtilisateurC.php";
include_once "C:/wamp64/www/projet/model/utilisateur.php";

$userC = new utilisateurC();
$error = "";

if (
    isset($_POST["cin"])&&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["ville"]) &&
    isset($_POST["tel"])
){
    if (
        !empty($_POST["cin"])&&
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

        var_dump($user);
        $userC->modifierutilisateur($user, $_GET['cin']);
     //  header('Location:tables.php');
    }
    else
        $error = "Missing information";
}

?>
<html>
<head>
    <title>Modifier Utilisateur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<button><a href="http://localhost/projet/views/back/examples/tables.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_GET['cin'])){

    $user = $userC->recupererutilisateur($_GET['cin']);

?>
<form action="" method="POST">
    <table align="center">
        <tr>

            <td>
                <label for="cin">Cin:
                </label>
            </td>
            <td>
                <input type="text" name="cin" id="cin" value = "<?php echo $user->cin; ?>" disabled >

            </td>
        </tr>
        <tr>
            <td>
                <label for="nom">Nom:
                </label>
            </td>
            <td>
                <input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $user->nom; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="prenom">Prénom:
                </label>
            </td>
            <td>
                <input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $user->prenom; ?>">
            </td>
        </tr>

        <tr>
            <td>
                <label for="email">Adresse mail:
                </label>
            </td>
            <td>
                <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn" value = "<?php echo $user->email; ?>">
            </td>
        </tr>
        <tr>

            <td>
                <label for="login">Login:
                </label>
            </td>
            <td>
                <input type="text" name="login" id="login" value = "<?php echo $user->login; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Mot de passe:
                </label>
            </td>
            <td>
                <input type="password" name="password" id="password" value = "<?php echo $user->password; ?>">
            </td>
        </tr>

        <tr>
            <td>
                <label for="ville">Ville:
                </label>
            </td>
            <td>
                <input type="text" name="ville" id="ville" value = "<?php echo $user->ville; ?>">
            </td>
        </tr>

        <tr>
            <td>
                <label for="tel">Tel:
                </label>
            </td>
            <td>
                <input type="text" name="tel" id="tel" value = "<?php echo $user->tel; ?>">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="Modifier" name = "modifer">
            </td>
            <td>
                <input type="reset" value="Annuler" >
            </td>
        </tr>
    </table>
</form>
<?php } ?>


</body>
</html>