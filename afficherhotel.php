<?php

      include "D:\wamp64\www\projet\controller\hotelc.php";
    $hotelc = new hotelc();
    $listehotel = $hotelc->afficherhotel();
    
 ?>

 <html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des hotels</title>
    </head>
    <body>

        <div align="right" > 
        <button  ><a href = "ajouterhotel.php">ajouter</a></button>
</div>
        <hr>
        <table border = 3 align = 'center' >
            <tr>
                <th>nom hotel</th>
                <th>adresse hotel</th>
                <th>categorie </th>
                <th>prix </th>
                <th>photo </th>
                <th>Supprimer un hotel</th>
                <th>Modifier un hotel </th>
            </tr>
            <?php
                foreach($listehotel as $hotel) { 
            ?>
                <tr>
                    <td>
                        <?php echo $hotel['nom'] ?> 
                    </td>
                    <td>
                        <?php echo $hotel['adresse'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['categorie'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['prix'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['photo'] ?>
                    </td>
                    <td>
                        <form method = "POST" action = "supprimerhotel.php">
                            <input type = "submit" name = "supprimer" value = "supprimer">
                            <input type = "hidden" name = "nom" value = "<?php echo $hotel['nom']; ?>">
                        </form>
                    </td>   
                    <td>
                        <form method = "GET" action = "modifierhotel.php ">
                            <input type = "submit" name ="modifier" value = "Modifier" >
                            <input type = "hidden" name = "id" value = "<?php echo $hotel['nom']; ?>">
                        </form>
                    </td> 
                </tr>
            <?php
                } 
            ?>
        </table>
        <h3><i class="fa fa-angle-right"></i> moyenne des prix </h3>
          <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
             <?php
                $listeprix=$hotelc-> afficherhotel();
                    ?>
                    <?php
             $nbclients=0;
             $moyenneprix=0;
             foreach ($listeprix as $row)
                 {
                     $nbclients++;
                    
                     $moyenneprix+=$row["prix"];
                 }
         ?>

         </br>
         <label style="color: black" for="id_avis">moyenne des prix :<h7 style="color:#00CED1"><?php echo $moyenneprix/$nbclients;?></h7> DT </label>
            </div>
          </div>
        </div>
       
              
          <!-- col-lg-12-->
        </div>    
    </body>
</html>