<?php
include "../model/location.php";
include "../controller/locationC.php";
$location1 = null;
    if (
        isset($_POST['id']) &&
        isset($_POST['type']) &&
        isset($_POST['prix'])
    ){
    if (
        !empty($_POST["id"]) &&
        !empty($_POST["type"]) &&
        !empty($_POST["prix"])
    ){
            $location1 = new location(

                $_POST['id'],
                $_POST['type'],
                $_POST['prix']
            );
            $location1c = new locationC();
            $location1c->ajouterLocation($location1);
            header('location: gestionTransport.php');
        }else echo"ggg";
    }else echo "mmm";
?>