<?php
include '../config1.php';
require_once '../model/location.php';
class locationC
{
 function afficherLocation()
 {
     $sql="SELECT * FROM location ";
     $db= config1::getConnexion();
     try{
         $liste = $db->query($sql);
         return $liste;
     }
     catch (Exception $e){
         die('Erreur: '.$e->getMessage());
     }
 }
 function afficherLocationtrier()
 {
     $sql="SELECT * FROM location order by prix desc";
     $db= config1::getConnexion();
     try{
         $liste = $db->query($sql);
         return $liste;
     }
     catch (Exception $e){
         die('Erreur: '.$e->getMessage());
     }
 }
 function ajouterLocation($location)
 {
     $sql="INSERT INTO location
            VALUES (:id, :type, :prix, :image, :description)";
     $db = config1::getConnexion();
     try {
         $query = $db->prepare($sql);
         $query->execute([
             'id' =>$location->getId(),
             'type' => $location->getType(),
             'prix' => $location->getPrix(),
             'image' => $location->getImage(),
             'description' => $location->getDescription()
         ]);
     }
     catch (Exception $e) {
         echo 'Erreur:' .$e->getMessage();
     }
 }
 function supprimerLocation($id)
    {
        $sql="DELETE FROM location WHERE id= :id";
        $db = config1::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try {
            $req->execute();
        }
        catch (Exception $e) {
            die('Erreur: ').$e->getMessage();
        }

    }
    function modifierLocation($location, $id)
    {
        try {
            $db = config1::getConnexion();
            $query = $db->prepare(
                'UPDATE location SET
                 id = :id,
                 type = :type,
                 prix = :prix,
                 image = :image,
                 description = :description
                 where id = :id'
            );
            $query->execute([
                'id' =>$location->getId(),
                'type' =>$location->getType(),
                'prix' =>$location->getPrix(),
                'image' =>$location->getImage(),
                'description' =>$location->getDescription(),
                'id' =>$id
            ]);
            echo $query->rowCount() . " mise a joure <br>";
        }catch (PDOException $e)
        {
            $e->getMessage();
        }
    }
    function recupererLocation($id)
    {
        $sql="SELECT * FROM location where id=$id";
        $db = config1::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute();
            $location = $query->fetch();
            return $location;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherLocation($type){
        $sql="SELECT * FROM location where type=$type";
        $db = config1::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $location = $query->fetch();
            return $location;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}