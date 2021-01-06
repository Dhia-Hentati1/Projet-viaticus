<?PHP
include "../core/eventC.php";
$eve=new eventC();
	$eve->supprimerevent($_GET["id"]);
	header('Location:gestion_event.php');

?>

