<?php 
	include "../../../model/offre.php";
	include "../../../config.php";
	/*include '../../views/back/dashbords.php';*/

    class offreC {
        function ajouterOffre($offre){
			$sql="INSERT INTO offre (id , type, idc) 
			VALUES (:id,:type,:idc)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'id' => $offre->getid(),
					'type' => $offre->gettype(),
					'idc' => $offre->getidc()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherOffre(){
			
			$sql="SELECT * FROM offre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerOffre($id){
			$sql="DELETE FROM offre WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierOffre($offre, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE offre SET
						id = :id, 
						type = :type, 
						idc = :idc
					WHERE id = :id'
				);
				$query->execute([
					'id' => $offre->getid(),
					'type' => $offre->gettype(),
					'idc' => $offre->getidc(),
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e)
			 {
				$e->getMessage();
			 }
		}
		function recupererOffre($id){
			$sql="SELECT * from offre where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$offre=$query->fetch();
				return $offre;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
    }
 ?>