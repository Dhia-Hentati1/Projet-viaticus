<?php
	include "../../controller/hotelc.php";
	include_once '../../model/hotel.php';

	$hotelc = new hotelc();
	$error = "";
	
	if (
		isset($_POST["nom"]) && 
        isset($_POST["adresse"]) &&
        isset($_POST["categorie"]) && 
        isset($_POST["photo"]) && 
        isset($_POST["prix"]) &&
        isset($_POST["service"])
	){
		if (
            !empty($_POST["nom"]) && 
            !empty($_POST["adresse"]) && 
            !empty($_POST["categorie"]) && 
            !empty($_POST["photo"]) && 
            !empty($_POST["prix"]) &&
            !empty($_POST["service"])
        ) {
            $hotel = new hotel(
                $_POST['nom'],
                $_POST['adresse'], 
                $_POST['categorie'],
                $_POST['photo'],
                $_POST['prix'],
                $_POST['service']
			);
			
            $hotelc->modifierhotel($hotel, $_GET['id']);
            header('refresh:5;url=afficherhotel.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier hotel</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherhotel.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		
		<form action="" method="POST">
            <table align="center">
            <tr>
                    <td rowspan='3' colspan='1'></td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">adresse:
                        </label>
                    </td>
                    <td><input type="text" name="adresse" id="adresse" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="categorie">categorie:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="categorie" id="categorie"maxlength="20" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="photo">photo:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="photo" id="photo"maxlength="20" >
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="prix" id="prix" >
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="service">service:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="service" id="service"maxlength="20" >
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
                    
            </table>
        </form>
    </body>
</html> 