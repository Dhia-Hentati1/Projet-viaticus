<?php
include "../config.php";

$categorie= $_POST['categorie'];
$prix= $_POST['prix'];
$nom_loisir= $_POST['nom_loisir'];


$sql = "INSERT INTO activite (categorie, prix, nom_loisir)
VALUES ('$categorie', '$prix', '$nom_loisir')";
		$db = config::getConnexion();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='gestion_des_loisir.php'</script>";
?>