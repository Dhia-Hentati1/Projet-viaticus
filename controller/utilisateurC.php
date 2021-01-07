<?php
include "C:/wamp64/www/projet/config.php";
require_once 'C:/wamp64/www/projet/model/utilisateur.php';

class utilisateurC
{
    function ajouterutilisateur($Utilisateur){
        $sql="INSERT INTO Utilisateur (cin,nom,prenom,email,login,password,ville,tel) 
			VALUES (:cin,:nom,:prenom,:email,:login,:password,:ville,:tel)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'cin' => $Utilisateur->getCin(),
                'nom' => $Utilisateur->getNom(),
                'prenom' => $Utilisateur->getPrenom(),
                'email' => $Utilisateur->getEmail(),
                'login' => $Utilisateur->getLogin(),
                'password' => $Utilisateur->getPassword(),
                'ville' => $Utilisateur->getVille(),
                'tel' => $Utilisateur->getTel()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }



    function afficherutilisateur()
    {
        $sql = "SELECT * FROM utilisateur";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimerutilisateur($cin){
        $sql="DELETE FROM utilisateur WHERE cin= :cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierutilisateur($utilisateur,$cin){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE utilisateur SET 						 
		
					    
					    nom = :nom,
						prenom = :prenom,
						email = :email,
						login = :login,
						password = :password,
						ville = :ville,
						tel = :tel
						
					WHERE cin = :cin'
            );
            $query->execute([
                'nom' => $utilisateur->getNom(),
                'prenom' => $utilisateur->getPrenom(),
                'email' => $utilisateur->getEmail(),
                'login' => $utilisateur->getLogin(),
                'password' => $utilisateur->getPassword(),
                'ville' => $utilisateur->getVille(),
                'tel' => $utilisateur->getTel(),
                'cin' => $cin

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recupererutilisateur($cin)
    {
        $sql="SELECT * from utilisateur where cin=:cin";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'cin'=> $cin
                ]
            );

            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererrole($cin)
    {
        $sql = "SELECT * from utilisateur where email= :cin";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'cin' => $cin
            ]);

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function connexionUser($email,$password)
    {
        $sql = "SELECT * FROM utilisateur WHERE Email='" . $email . "' and Password = '" . $password . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $count = $query->rowCount();
            if ($count == 0) {
                $message = "pseudo ou le mot de passe est incorrect";
            } else {
                $x = $query->fetch();
                $message = $x['role'];
            }
        } catch (Exception $e) {
            $message = " " . $e->getMessage();
        }
        return $message;
    }
}

class carteC
{
    function ajoutercarte($Carte){
        $sql="INSERT INTO Carte (cin,pts) 
			VALUES (:cin,:pts)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'cin' => $Carte->getCin(),
                'pts' => $Carte->getPts()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function affichercarte()
    {
        $sql = "SELECT * FROM carte";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function trieracarte()
    {
        $sql = "SELECT * FROM carte order by pts DESC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function trierdcarte()
    {
        $sql = "SELECT * FROM carte order by pts ASC";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimercarte($cin){
        $sql="DELETE FROM carte WHERE cin= :cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifiercarte($carte, $cin){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE carte SET 						 
		
					    pts = :pts
						
					WHERE cin = :cin'
            );
            $query->execute([
                'pts' => $carte->getPts(),
                'cin' => $cin

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function recuperercarte($cin)
    {
        $sql="SELECT * from carte where cin=$cin";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $cart = $query->fetch(PDO::FETCH_OBJ);
            return $cart;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>

