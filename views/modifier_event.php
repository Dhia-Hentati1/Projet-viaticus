<?PHP
include "../core/eventC.php";
include "../entities/event.php";

if ( isset($_GET['id']) and isset($_POST['nom']) and isset($_POST['date_events']) and isset($_POST['description']) and isset($_POST['emplacement'])){
	$event=new event($_GET['id'],$_POST['nom'],$_POST['date_events'],$_POST['description'],$_POST['emplacement']);
	$eve=new eventC();
	$eve->modifierevent($event,$_POST['id']);
	
}
header('Location: gestion_event.php');
?>