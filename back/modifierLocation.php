<?php
include "../controller/locationC.php";
include_once "../model/location.php";
include "dashbord.php";
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <link href="assets/css/style.css"/>
</head>
<body>
<div class="content" align="center">
<div id="error">
    <?php echo $error; ?>
</div>

<?php
$location = $locationC->recupererLocation($_GET['id']);
?>
<div class="col-md-8" align="center">
<div class="card">
<div class="card-header">
                <h4 class="card-title"> modifier location</h4>
              </div>
  <form action="" method="post">
     
  <div class="table-responsive">
      <table border="1" class="table" >
      <tr>
      <td><label for="id">id</label></td>
      <td><input type="text" name="id" id="id" value="<?php echo $location['id'];?>" ></td>
      </tr>
      <tr>
      <td><label for="type">type</label></td>
      <td><input type="text" name="type" id="type" value="<?php echo $location['type'];?>"></td>
      </tr>
      <tr>
      <td><label for="prix">Prix</label></td>
      <td><input type="number" name="prix" id="prix" value="<?php echo $location['prix'];?>"></td>
      </tr>
      <tr>
      <td><label for="image">image</label></td>
      <td><img src="./assets/img/<?php echo $location['image']?>" width="150" height="150">
          <input type="file" name="image" id="image"></td>
      </tr>
      <tr>
      <td><label for="descrption">description</label></td>
      <td><input type="text" name="description" id="description" value="<?php echo $location['description'];?>"></td>
      </tr>
      </table>
      </div>
      <input type="submit" value="envoyer" align="center">
  </form>
  </div>
  </div>
  </div>
</body>
</html>
