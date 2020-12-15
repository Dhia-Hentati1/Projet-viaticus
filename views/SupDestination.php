<?PHP
	include "../controller/destinationC.php";

	$Ville_arriveeC = new Ville_arriveeC();
	
	if (isset($_POST["id_destination"])){
		$Ville_arriveeC->SupprimerDestination($_POST["id_destination"]);
		header('Location:AfficherDestination.php');
	}

?>