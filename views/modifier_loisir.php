<?PHP
include "../core/loisirc.php";
include "../entities/loisir.php";

if (  isset($_GET['id']) and isset($_POST['categorie']) and isset($_POST['prix']) and isset($_POST['nom_loisir']) ){
	$loisir=new loisir($_GET['id'],$_POST['categorie'],$_POST['prix'],$_POST['nom_loisir']);
	$loic=new LoisirC();
	$loic->modifierloisir($loisir,$_POST['id']);
	
}
header('Location: gestion_des_loisir.php');
?>