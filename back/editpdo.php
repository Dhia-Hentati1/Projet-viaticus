<?php
include ("db.php");

$get_id=$_GET['id_event'];

$nom = $_POST["nom"];
$date_events = $_POST["date_events"];
$description = $_POST["description"];
$emplacement = $_POST["emplacement"];


$sql = "UPDATE event SET nom ='$nom', date_events ='$date_events', description ='$description' , emplacement ='$emplacement'
 WHERE id_event= '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Account!'); window.location='event.php'</script>";

?>

