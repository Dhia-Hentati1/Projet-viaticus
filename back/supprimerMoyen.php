<?php
include "../controller/moyenTransportC.php";
$MoyenC=new moyenTransportC();
if (isset($_POST["matricule"]))
{
    $MoyenC->supprimerMoyen($_POST['matricule']);
    header('location:gestionTransport.php');
}