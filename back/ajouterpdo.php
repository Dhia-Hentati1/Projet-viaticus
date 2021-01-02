<?php
require_once('db.php');

$nom= $_POST['nom'];
$date_events= $_POST['date_events'];
$description= $_POST['description'];
$emplacement= $_POST['emplacement'];



$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO event (nom, date_events, description,emplacement)
VALUES ('$nom', '$date_events', '$description','$emplacement')";

$conn->exec($sql);
echo "<script>alert('Account successfully added!'); window.location='event.php'</script>";
?>