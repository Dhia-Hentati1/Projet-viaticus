<?PHP
include "../config.php";
class eventC{
 function ajouterevent($event){
		$sql="insert into event (nom,date_events,description,emplacement) values (:nom,:date_events,:description,:emplacement)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$event->getnom();
        $date_events=$event->getdate_events();
        $description=$event->getdescription();
        $emplacement=$event->getemplacement();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date_events',$date_events);
        $req->bindValue(':description',$description);
        $req->bindValue(':emplacement',$emplacement);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
  function afficherevent(){
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierevent(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From event ORDER BY nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerevent($id){
		$sql="DELETE FROM event where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherevent($nom_event_r1){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From event WHERE nom = '$nom_event_r1' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierevent($event,$id){
		$sql="UPDATE event SET  nom=:nom, date_events=:date_events , description=:description  emplacement =:emplacement WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id=$event->getid();
        $nom=$event->getnom();
        $date_events=$event->getdate_events();
        $description=$event->getdescription();
        $emplacement=$event->getemplacement();
		//$datas = array(':id_mod'=>$id_mod,':id_rec'=>$id_rec, ':nom'=>$nom, ':email'=>$email,':objet'=>$objet,':message'=>$message);
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date_event',$date_events);
		$req->bindValue(':description',$description);
		$req->bindValue(':emplacement',$emplacement);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  // echo " Les datas : " ;
 // print_r($datas);
        }
		
	}


}


?>

