<?PHP
	include '../config.php';
	require_once '../Model/Vol.php';


	class VolC {
		
		function ajouterVol($Vol){
			$sql="INSERT INTO vol ( compagnie, Email, date_depart, date_arrivee, heure_depart, heure_arrivee, ville_depart, ville_arrivee, classe, prix) 
			VALUES (:compagnie, :Email, :date_depart, :date_arrivee, :heure_depart, :heure_arrivee, :ville_depart, :ville_arrivee, :classe, :prix)";
			$db = config::getConnexion();
			
				$query = $db->prepare($sql);
			
				$query->execute([
					'compagnie' => $Vol->getCompagnie(),
					'Email' => $Vol->getEmail(),
					'date_depart' => $Vol->getDate_depart(),
					'date_arrivee' => $Vol->getDate_arrivee(),
					'heure_depart' => $Vol->getHeure_depart(),
					'heure_arrivee' => $Vol->getHeure_arrivee(),
					'ville_depart' => $Vol->getVille_depart(),
					'ville_arrivee' => $Vol->getVille_arrivee(),
					'classe' => $Vol->getClasse(),
					'prix' => $Vol->getPrix(),
				]);			
								
		}
			
		function AfficherVol(){
			
			$sql="SELECT * FROM vol as v
			inner join ville_arrivee as va 
			on v.ville_arrivee = va.id_destination";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function AficherVol(){
			
			$sql="SELECT * FROM ville_arrivee as va
			LEFT join vol as v
			on v.ville_arrivee = va.id_destination
			GROUP BY va.ville";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
			
		function SupprimerVol($id_vol){
			$sql="DELETE FROM vol WHERE id_vol= :id_vol";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_vol',$id_vol);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function ModifierVol($Vol, $id_vol){
			
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE vol SET 
						compagnie = :compagnie, 
						Email = :Email,
						date_depart = :date_depart,
						date_arrivee = :date_arrivee,
						heure_depart = :heure_depart,
						heure_arrivee = :heure_arrivee,
						ville_depart = :ville_depart,
						ville_arrivee = :ville_arrivee,
						classe = :classe,
						prix = :prix
					WHERE id_vol = :id_vol'
				);
				$query->execute([
					'compagnie' => $Vol->getCompagnie(),
					'Email' => $Vol->getEmail(),
					'date_depart' => $Vol->getDate_depart(),
					'date_arrivee' => $Vol->getDate_arrivee(),
					'heure_depart' => $Vol->getHeure_depart(),
					'heure_arrivee' => $Vol->getHeure_arrivee(),
					'ville_depart' => $Vol->getVille_depart(),
					'ville_arrivee' => $Vol->getVille_arrivee(),
					'classe' => $Vol->getClasse(),
					'prix' => $Vol->getPrix(),
					'id_vol' => $id_vol
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			
		}
		
		function RecupererVol($id_vol){
			$sql="SELECT * from vol as v
			inner join ville_arrivee as va 
			on v.ville_arrivee = va.id_destination
			where v.id_vol=$id_vol";
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
		}
	
		function rechercherVolByid($id_vol){
			$sql="SELECT * from vol as v
			inner join ville_arrivee as va 
			on v.ville_arrivee = va.id_destination
			where id_vol like '$id_vol' ";
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
		}

		function TriVol($cle){
			
			$sql="SELECT * FROM vol as v
			inner join ville_arrivee as va 
			on v.ville_arrivee = va.id_destination			
			ORDER BY $cle ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}	
	}
?>