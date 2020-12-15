<?PHP
include '../config.php';
require_once  '../model/moyenTransport.php';
class moyenTransportC
{
     function afficherMoyenTransport()
    {
        $sql="SELECT * FROM moyentransport";
        $db= config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function AjouterMoyen($moyen)
    {
     $sql="INSERT INTO moyentransport ( matricule, nom, prix, image)
            VALUES (:matricule, :nom, :prix, :image)";
     $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'matricule' =>$moyen->getMatricule(),
                'nom' => $moyen->getNom(),
                'prix' => $moyen->getPrix(),
                'image' => $moyen->getImage()
            ]);
        }
        catch (Exception $e) {
            echo 'Erreur:' .$e->getMessage();
        }
    }
    function supprimerMoyen($matricule)
    {
        $sql="DELETE FROM moyentransport WHERE matricule= :matricule";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':matricule',$matricule);
        try {
            $req->execute();
        }
        catch (Exception $e) {
            die('Erreur: ').$e->getMessage();
        }

    }
    function modifierMoyen($Moyen, $matricule)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE moyentransport SET
                nom = :nom,
                prix = :prix,
                image = :image
                where matricule = :matricule'
            );
            $query->execute([
                'nom' =>$Moyen->getNom(),
                'prix' =>$Moyen->getPrix(),
                'image' =>$Moyen->getImage(),
                'matricule' =>$matricule
            ]);
            echo $query->rowCount() . " mise a joure <br>";
        }catch (PDOException $e)
        {
            $e->getMessage();
        }
    }
    function recupererMoyen($matricule)
    {
        $sql="SELECT * FROM moyentransport where matricule=$matricule";
        $db = config::getConnexion();
        try {
            $query=$db->prepare($sql);
            $query->execute();
            $moyen = $query->fetch();
            return $moyen;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>

