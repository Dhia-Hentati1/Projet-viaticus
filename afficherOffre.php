<?php
 
  include "D:\wamp64\www\projet\controller\offreC.php";

    $offreC = new offreC();
    $listeOffres = $offreC->afficherOffre();
    
 ?>

 <html lang= fr>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des offres</title>
    </head>
    <body>
        <div align="right">
        <button><a href = "ajouterOffre.php">Retour</a></button>
</div>
        
        <hr>
        <table border = 1 align = 'center'>
            <tr>
                <th>ID offre</th>
                <th>Type d'offre</th>
                <th>ID Client</th>
                <th>Supprimer une Offre</th>
                <th>Modifier une offre </th>
            </tr>
            <?php
                foreach($listeOffres as $offre) { 
            ?>
                <tr>
                    <td>
                        <?php echo $offre['id'] ?> 
                    </td>
                    <td>
                        <?php echo $offre['type'] ?>
                    </td>
                    <td>
                        <?php echo $offre['idc'] ?>
                    </td>
                    <td>
                        <form method = "POST" action = "supprimerOffre.php">
                            <input type = "submit" name = "supprimer" value = "supprimer">
                            <input type = "hidden" name = "id" value = "<?php echo $offre['id']; ?>">
                        </form>
                    </td>   
                    <td>
                        <form method = "GET" action = "modifierOffre.php ">
                            <input type = "submit" name ="modifier" value = "Modifier" >
                            <input type = "hidden" name = "id" value = "<?php echo $offre['id']; ?>">
                        </form>
                    </td> 
                </tr>
            <?php
                } 
            ?>
        </table>    
    </body
 </html>