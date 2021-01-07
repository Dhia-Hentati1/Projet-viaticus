<?php
   
    include_once '../../../Controller/offreC.php';

    $error = "";

    $offreC = new offreC();

    if(
        isset($_POST["id"]) &&
        isset($_POST["type"]) &&
        isset($_POST["idc"])
    ) {
        if(  
            !empty($_POST["id"])&&
            !empty($_POST["type"])&&
            !empty($_POST["idc"])
        ) {
            $offre = new offre(
                $_POST['id'],
                $_POST['type'],
                $_POST['idc']
            );
            $offreC->ajouterOffre($offre);
            header('Location:afficherOffre.php');
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
    <title>OFFRE</title>
 </head>
    <body>
        <button class="btn btn-primary"><a href = "afficherOffre.php">Retour</a></button>
        <hr>

        <div id = "error">
            <?php echo $error; ?>
        </div>
        <form action = "" method = "POST">
            <table align = "center">
            <tr>
                   
                        <label for="id">id offre</label>
                        <input type="number" name="id" id="id" >
                    
                </tr>
                <tr>
                    <label for = "type">Choisir type Offre </label>
                    <select name = "type" id = "type">
                        <option value = "remis">remis</option>
                        <option value = "hotel du mois">hotel du mois</option>
                        
                    </select>
                </tr>
                <tr>
                    <label for = "idc">Donner votre ID</label>
                    <input type = "number" name = "idc" id = "idc">
                    <input type = "submit" value = "Envoyer">
                </tr>
            </table>
        </form>
    </body>
</html> 