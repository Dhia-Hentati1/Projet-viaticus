<?php
include ("db.php");

$get_id=$_GET['id'];

$categorie = $_POST["categorie"];
$prix = $_POST["prix"];
$nom_loisir = $_POST["nom_loisir"];


$sql = "UPDATE activite SET categorie ='$categorie', prix ='$prix', nom_loisir ='$nom_loisir' 
 WHERE id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='activite.php'</script>";

?>

