<?php
include "../controller/moyenTransportC.php";
include_once "../model/moyenTransport.php";

$moyenC = new moyenTransportC();
$error = "";
if (
    isset($_POST["nom"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["image"])

){
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["image"])
    ) {
        $moyen = new moyenTransport(
            $_POST['nom'],
            $_POST['prix'],
            $_POST['image']
        );

        $moyenC->modifierMoyen($moyen, $_GET['matricule']);
        header('refresh:5;url=gestionTransport.php');
    }
    else
        $error = "Missing information";
}

?>
<html>
<head>
    <title>Modifier moyen de transport</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="error">
    <?php echo $error; ?>
</div>

<?php
$moyen = $moyenC->recupererMoyen($_GET['matricule']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="matricule">Matricule</label></td>
              <td><label for="nom">Nom</label></td>
              <td><label for="prix">Prix</label></td>
              <td><label for="image">Image</label></td>
          </tr>
      <tr>
      <td><input type="text" name="matricule" id="matricule" value="<?php echo $moyen['matricule'];?>" ></td>
      <td><input type="text" name="nom" id="nom" value="<?php echo $moyen['nom'];?>"></td>
      <td><input type="number" name="prix" id="prix" value="<?php echo $moyen['prix'];?>"></td>
      <td><input type="text"  name="image" id="image" value="<?php  echo $moyen['image'];?>"></td>
      </tr>
          <tr>
      <input type="submit" value="envoyer" ">
          </tr>
      </table>
  </form>

</body>
</html>
