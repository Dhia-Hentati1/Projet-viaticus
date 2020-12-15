<?PHP
	include '../config.php';
	require_once '../Model/destination.php';
	require_once '../Model/vol.php';

	class Ville_arriveeC {
		
		function AjouterDestination($Ville_arrivee){
			$sql="INSERT INTO ville_arrivee ( ville, pays, image, description) 
			VALUES (:ville, :pays, :image, :description)";
			$db = config::getConnexion();			
				$query = $db->prepare($sql);			
				$query->execute([
					'ville' => $Ville_arrivee->getVille(),
					'pays' => $Ville_arrivee->getPays(),					
					'image' => $Ville_arrivee->getImage(),
					'description' => $Ville_arrivee->getDescription()
				
				]);											
		}
			
		function AfficherDestination(){			
			$sql="SELECT * FROM ville_arrivee";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function SupprimerDestination($id_destination){
			$sql="DELETE FROM ville_arrivee WHERE id_destination= :id_destination";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_destination',$id_destination);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function ModifierDestination($Ville_arrivee, $id_destination){
			
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE ville_arrivee SET 
						ville = :ville, 
						pays = :pays,
						image = :image,
						description = :description						

					WHERE id_destination= :id_destination'
				);
				$query->execute([
					'ville' => $Ville_arrivee->getVille(),
					'pays' => $Ville_arrivee->getPays(),
					'image' => $Ville_arrivee->getImage(),	
					'description' => $Ville_arrivee->getDescription(),
					'id_destination' => $id_destination
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			
		}
		
		function RecupererDestination($id_destination){
			$sql="SELECT * from ville_arrivee where id_destination=$id_destination";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$place=$query->fetch();
				return $place;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		/*function RechercherDestination($id_destination){
			$sql="SELECT * from ville_arrivee where id_destination like '$id_destination' ";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}*/

		function rechercherDesByville($id_destination){
			$sql="SELECT * from ville_arrivee as va
			inner join vol as v 
			on va.id_destination = v.ville_arrivee
			where v.ville_arrivee like '$id_destination'";
			$db = config::getConnexion();
			
			try{
				
				$place = $db->query($sql);
				return $place;
				
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function rechercherSelonFormulaire($compagnie, $prix, $ville, $date_depart, $classe){
			$sql="SELECT * from ville_arrivee as va
			inner join vol as v 
			on va.id_destination = v.ville_arrivee			
			where v.compagnie like '$compagnie' AND v.prix <= $prix  AND va.ville like '$ville' AND v.date_depart <= '$date_depart' AND v.classe like '$classe'" ;
			$db = config::getConnexion();
			
			try{
				
				$place = $db->query($sql);
				return $place;
				
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		

		
	}

?>