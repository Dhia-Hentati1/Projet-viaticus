<?PHP
include "../core/LoisirC.php";
$loisirC=new LoisirC();
	$loisirC->supprimerloisir($_GET["id"]);
	header('Location:gestion_des_loisir.php');

?>

