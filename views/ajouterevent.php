<?php
include "../config.php";

$nom= $_POST['nom'];
$date_events= $_POST['date_events'];
$description= $_POST['description'];
$emplacement= $_POST['emplacement'];



$sql = "INSERT INTO event (nom,date_events,description,emplacement)
VALUES ('$nom','$date_events','$description','$emplacement')";
		$db = config::getConnexion();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='gestion_event.php'</script>";
?>