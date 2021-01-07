<?php
 
 
    include '../../../Controller/offreC.php';

    $error = "";
    $offreC = new offreC();
    
    if( isset($_POST["id"]) &&
        isset($_POST["type"]) &&
        isset($_POST["idc"])
    ) {
        if(!empty($_POST["id"])&&
            !empty($_POST["type"])&&
            !empty($_POST["idc"])
        ) {
            $offre = new offre(
                $_POST["id"],
                $_POST["type"],
                $_POST["idc"]
            );
            $offreC->modifierOffre($offre, $_POST["id"]);
            header('refresh:5;url:afficherOffre.php');
        }
        else
            $error = "Missing information";
    }
 ?>

<!DOCTYPE html>
 <html lang = fr>
 <head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier OFFRE</title>
 </head>
    <body>
    <button><a href = "afficheroffre.php">Retour</a></button>
        <hr>

        <div id = "error">
            <?php echo $error; ?>
        </div>

        <?php 
            if(isset($_GET['id'])) {
                var_dump("GET ". $_GET['id']);
                $offre = $offreC->recupererOffre($_GET['id']);
            }
        ?>
        <form action = "" method = "POST">
            <table align = "center">
                <tr>
                    <label for ="id">ID offre:</label>
                    <input type = "text" name = "id" id = "id" value = "<?php echo $offre['id'];?>">
                </tr>
                <tr>
                    <label for = "type">Choisir votre Offre </label>
                    <select name = "type" id = "type" value = "<?php echo $offre['type'];?>">
                        <option value = "remis">remis</option>
                        <option value = "hotel du mois">hotel du mois</option>
                      
                    </select>
                </tr>
                <tr>
                    <label for = "idc">Donner votre ID</label>
                    <input type = "number" name = "idc" id = "idC"value = "<?php echo $offre['idc'];?>" >
                    <input type = "submit" value = "Envoyer">
                    <input type="reset" value="Annuler" >
                </tr>
            </table>
        </form>
    </body>
</html> 