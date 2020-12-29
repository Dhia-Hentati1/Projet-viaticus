<?php
require_once('db.php');

$catégorie= $_POST['catégorie'];
$prix= $_POST['prix'];
$nom_loisir= $_POST['nom_loisir'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO activite (categorie, prix, nom_loisir)
VALUES ('$catégorie', '$prix', '$nom_loisir')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='activite.php'</script>";
?>