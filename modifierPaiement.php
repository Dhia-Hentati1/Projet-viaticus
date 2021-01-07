<?php
include "../paiementC.php";
include_once "../paiement.php";

$paiementC = new paiementC();
$error = "";
if (
    isset($_POST["Id"]) &&
    isset($_POST["name"]) &&
    isset($_POST["cin"]) &&
    isset($_POST['email']) &&
    isset($_POST['phone']) &&
    isset($_POST['date']) &&
    isset($_POST['type'])

){
    if (
        !empty($_POST["Id"]) &&
        !empty($_POST["name"]) &&
        !empty($_POST["cin"]) &&
        !empty($_POST['email']) &&
        !empty($_POST['phone']) &&
        !empty($_POST['date']) &&
        !empty($_POST['type'])
    ) {
        $paiement  = new paiement(
            $_POST['Id'],
            $_POST['name'],
            $_POST['cin'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['date'],
            $_POST['type']
        );

        $paiementC->modifierPaiement($paiement, $_GET['Id']);
        header('refresh:5;url=tables.php');
    }
    else
        $error = "Missing information";
}

?>
<html>
<head>
    <title>Modifier paiement</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="error">
    <?php echo $error; ?>
</div>

<?php
$paiement = $paiementC->recupererPaiement($_GET['Id']);
?>
  <form action="" method="post">
      <table border="1" align="center">
          <tr>
              <td><label for="Id">id</label></td>
              <td><label for="name">name</label></td>
              <td><label for="cin">Cin</label></td>
              <td><label for="email">Email</label></td>
              <td><label for="phone">Phone</label></td>
              <td><label for="date">Date</label></td>
              <td><label for="type">Type</label></td>
          </tr>
      <tr>
      <td><input type="text" name="Id" id="Id" value="<?php echo $res['Id'];?>" ></td>
      <td><input type="text" name="name" id="name" value="<?php echo $res['name'];?>"></td>
      <td><input type="text" name="cin" id="cin" value="<?php echo $res['cin'];?>"></td>
      <td><input type="text" name="email" id="email" value="<?php echo $res['email'];?>"></td>
      <td><input type="text" name="phone" id="phone" value="<?php echo $res['phone'];?>"></td>
      <td><input type="date" name="date" id="date" value="<?php echo $res['date'];?>"></td>
      <td><input type="text" name="type" id="type" value="<?php echo $res['type'];?>"></td>
      
      </tr>
          <tr>
      <input type="submit" value="envoyer">
          </tr>
      </table>
  </form>

</body>
</html>