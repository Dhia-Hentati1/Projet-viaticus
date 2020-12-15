<?php
include "../controller/locationC.php";
$locationC=new locationC();
if (isset($_POST["id"]))
{
    $locationC->supprimerLocation($_POST['id']);
    header('location:gestionTransport.php');
}