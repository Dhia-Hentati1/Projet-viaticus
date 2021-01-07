<?php
  include "../../../controller/offreC.php";
   

	$offreC=new offreC();
	
	if (isset($_POST["id"])){
		$offreC->supprimerOffre($_POST["id"]);
        header('Location:gestionOffre.php');
    }
   
?>