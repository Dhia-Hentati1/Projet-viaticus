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
        header('Location:connexion.php');
    }

    else if (($_POST["password"]!=$_POST["password1"]) && (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999)))
        $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche / le mot de passe doit être le même dans la confirmation";

    else if (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999))
        $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche";
    else if ($_POST["password"]!=$_POST["password1"])
        $error = "le mot de passe doit être le même dans la confirmation";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>
<?php include ('top.php')
?>

        <form action="" method="post" align="center">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Créer un compte</h4>
                </div>


                        <input name="cin" type="text" placeholder="cin" required="">


<br>


                        <input name="nom" type="text" placeholder="nom" required="">


<BR>

                        <input name="prenom" type="text" placeholder="prenom" required="">
                <br>
        <input name="email" type="text" pattern=".+@gmail.com|.+@esprit.tn" placeholder="email" required="">
<br>

                        <input name="login" type="text" placeholder="login" required="">
<br>
                        <input name="password" type="password" placeholder="password" required="">
<br>
                <input name="password1" type="password" placeholder=" confirmer password" required="">
                <br>
                        <input name="ville" type="text" placeholder="ville" required="">
    <br>
                        <input name="tel" type="text" placeholder="tel" required="">
<br>

                        <button type="submit" id="form-submit" class="btn-primary">créer</button>
    <br>

                        <button type="reset" >annuler</button>
        <br>
        </form>
<div align="center"> <?php echo ($error) ?> </div>
<br>
<br>



<?php include ('footer.php') ?>
<!-- jQuery -->


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>