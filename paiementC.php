<?php
include 'config1.php';
require_once 'paiement.php';
class paiementC
{
 function afficherPaiement()
 {
     $sql="SELECT * FROM res ";
     $db= config1::getConnexion();
     try{
         $liste = $db->query($sql);
         return $liste;
     }
     catch (Exception $e){
         die('Erreur: '.$e->getMessage());
     }
 }
 
 function ajouterPaiement($paiement)
 {
     $sql="INSERT INTO res
            VALUES (:Id,:name,:cin,:email,:phone, :date,:type)";
     $db = config1::getConnexion();
     try {
         $query = $db->prepare($sql);
         $query->execute([
             'Id' =>$paiement->getId(),
             'name' =>$paiement->getName(),
             'cin' =>$paiement->getCin(),
             'email' =>$paiement->getEmail(),
             'phone' =>$paiement->getPhone(),
             'date' =>$paiement->getDate(),
             'type' => $paiement->getType(),
            
         ]);
     }
     catch (Exception $e) {
         echo 'Erreur:' .$e->getMessage();
     }
 }
 function supprimerPaiement($Id)
    {
        $sql="DELETE FROM res WHERE Id= :Id";
        $db = config1::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Id',$Id);
        try {
            $req->execute();
        }
        catch (Exception $e) {
            die('Erreur: ').$e->getMessage();
        }

    }
    function modifierPaiement($paiement, $ID)
    {
        try {
            $db = config1::getConnexion();
            $query = $db->prepare(
                'UPDATE res SET
                 Id = :Id,
                 name = :name,
                 cin = :cin,
                 email = :email,
                 phone = :phone,
                 date = :date,
                 type = :type,
                 where Id = :Id'
            );
            $query->execute([
                'Id' =>$paiement->getId(),
                'name' =>$paiement->getName(),
                'cin' =>$paiement->getCin(),
                'email' =>$paiement->getEmail(),
                'phone' =>$paiement->getPhone(),
                'date' =>$paiement->getDate(),
                'type' =>$paiement->getType(),
                'Id' =>$Id
            ]);
            echo $query->rowCount() . " mise a joure <br>";
        }catch (PDOException $e)
        {
            $e->getMessage();
        }
    }
    function recupererPaiement($Id)
    {
        $sql="SELECT * FROM res where Id=$Id";
        $db = config1::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute();
            $paiement = $query->fetch();
            return $paiement;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherPaiement($name){
        $sql="SELECT * FROM res where name=$name ";
        $db = config1::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $paiement = $query->fetch();
            return $paiement;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}