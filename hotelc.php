<?php
include '../../../config.php';
include '../../../model/hotel.php';
/*include '../../views/back/dashbord.php';*/
/*include '../../views/front/index.html';*/

    class hotelc {
        function afficherhotel()
    {
        $sql="SELECT * FROM hotel";
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherhoteltri()
    {
        $sql="SELECT * FROM hotel ORDER BY prix" ;
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function ajouterhotel($hotel){
        $sql="INSERT INTO hotel ( nom, adresse, categorie,photo ,prix,service)
            VALUES (:nom, :adresse, :categorie, :photo, :prix, :service)";
        $db = config::getConnexion();
          try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' =>$hotel->getnom(),
                'adresse' => $hotel->getadresse(),
                'categorie' => $hotel->getcategorie(),
                'photo' => $hotel->getphoto(),
                'prix' => $hotel->getprix(),
                'service' => $hotel->getservice()
            ]);
      	
            echo " Nouveau hotel a été créé avec succès <br>";
        }				
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function supprimerhotel($nom)
    {
        $sql="DELETE FROM hotel WHERE nom= :nom";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$nom);
        try {
            $req->execute();
        }
        catch (Exception $e) {
            die('Erreur: ').$e->getMessage();
        }

    }
    function modifierhotel($hotel, $nom)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE hotel SET
                nom = :nom,
                adresse = :adresse,
                prix = :prix,
                photo = :photo,
                categorie = :categorie,
                service = :service
                where nom = :nom'
            );
            $query->execute([
                'nom' =>$hotel->getnom(),
                'adresse' =>$hotel->getadresse(),
                'prix' =>$hotel->getprix(),
                'photo' =>$hotel->getphoto(),
                'categorie' =>$hotel->getcategorie(),
                'service' =>$hotel->getservice(),
                'nom' =>$nom
            ]);
            echo $query->rowCount() . " mise a joure <br>";
        }catch (PDOException $e)
        {
            $e->getMessage();
        }
    }
    function recupererhotel($hotel)
    {
        $sql="SELECT * FROM hotel where nom=$nom";
        $db = config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute();
            $hotel = $query->fetch(PDO::FETCH_OBJ);
            return $hotel;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherhotel($nom_loisir_r1){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From hotel WHERE nom = '$nom_loisir_r1' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    }

