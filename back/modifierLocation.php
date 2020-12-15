<?php
include "../controller/locationC.php";
include_once "../model/location.php";

$locationC = new locationC();
$error = "";
if (
    isset($_POST["id"]) &&
    isset($_POST["type"]) &&
    isset($_POST["prix"]) &&
    isset($_POST['image']) &&
    isset($_POST['description'])

){
    if (
        !empty($_POST["id"]) &&
        !empty($_POST["type"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST['image']) &&
        !empty($_POST['description'])
    ) {
        $location = new location(
            $_POST['id'],
            $_POST['type'],
            $_POST['prix'],
            $_POST['image'],
            $_POST['description']
        );

        $locationC->modifierLocation($location, $_GET['id']);
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
$location = $locationC->recupererLocation($_GET['id']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="id">id</label></td>
              <td><label for="type">type</label></td>
              <td><label for="prix">Prix</label></td>
              <td><label for="image">image</label></td>
              <td><label for="descrption">description</label></td>
          </tr>
      <tr>
      <td><input type="text" name="id" id="id" value="<?php echo $location['id'];?>" ></td>
      <td><input type="text" name="type" id="type" value="<?php echo $location['type'];?>"></td>
      <td><input type="number" name="prix" id="prix" value="<?php echo $location['prix'];?>"></td>
      <td><img src="./assets/img/<?php echo $location['image']?>" width="150" height="150">
          <input type="file" name="image" id="image"></td>
          <td><input type="text" name="description" id="description" value="<?php echo $location['description'];?>"></td>
      </tr>
          <tr>
      <input type="submit" value="envoyer">
          </tr>
      </table>
  </form>

</body>
</html>
