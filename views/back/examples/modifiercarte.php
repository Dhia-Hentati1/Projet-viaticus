<?php
include "C:/wamp64/www/projet/controller/utilisateurC.php";
include_once "C:/wamp64/www/projet/model/utilisateur.php";

$cartC = new carteC();
$error = "";

if (
    isset($_POST["cin"])&&
    isset($_POST["pts"])
){
    if (
        !empty($_POST["cin"])&&
        !empty($_POST["pts"])
    ) {
        $cart = new carte(
            $_POST['cin'],
            $_POST['pts']
        );

        $cartC->modifiercarte($cart, $_GET['cin']);
        header('Location:examples/table2.php');
    }
    else
        $error = "Missing information";
}

?>
<html>
<head>
    <title>Modifier Carte</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<button><a href="http://localhost/projet/views/back/examples/table2.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<?php

    $cart = $cartC->recuperercarte($_GET['cin']);

    ?>
    <form action="" method="POST">
        <table align="center">
            <tr>

                <td>
                    <label for="cin">Cin:
                    </label>
                </td>
                <td>
                    <input type="text" name="cin" id="cin" value = "<?php echo $cart->cin; ?>" disabled >

                </td>
            </tr>
            <tr>
                <td>
                    <label for="pts">Pts:
                    </label>
                </td>
                <td>
                    <input type="text" name="pts" value = "<?php echo $cart->pts; ?>" >
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

</body>
</html>
