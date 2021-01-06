<?PHP
include "../config.php";
class LoisirC{
 function ajouterloisir($loisir){
		$sql="insert into activite (categorie,prix,nom_loisir) values (:categorie,:prix,:nom_loisir)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $categorie=$loisir->getcategorie();
        $prix=$loisir->getprix();
        $nom_loisir=$loisir->getnom_loisir();
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':nom_loisir',$nom_loisir);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
  function afficherloisir(){
		$sql="SElECT * From activite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierloisir(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From activite ORDER BY prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerloisir($id){
		$sql="DELETE FROM activite where id= :id";
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
    function rechercherloisir($nom_loisir_r1){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From activite WHERE nom_loisir = '$nom_loisir_r1' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierloisir($loisir,$id){
		$sql="UPDATE activite SET  categorie=:categorie, prix=:prix , nom_loisir=:nom_loisir WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$loisir->getid();
        $categorie=$loisir->getcategorie();
        $prix=$loisir->getprix();
        $nom_loisir=$loisir->getnom_loisir();
		//$datas = array(':id_mod'=>$id_mod,':id_rec'=>$id_rec, ':nom'=>$nom, ':email'=>$email,':objet'=>$objet,':message'=>$message);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':nom_loisir',$nom_loisir);
		
		
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

