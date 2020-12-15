<?PHP
	include "../controller/volC.php";

	$VolC=new VolC();
	
	if (isset($_POST["id_vol"])){
		$VolC->SupprimerVol($_POST["id_vol"]);
		header('Location:AfficherVol.php');
	}

?>