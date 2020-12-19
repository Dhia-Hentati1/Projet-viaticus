<?PHP
	include "../controller/volC.php";
  include "./header.php";
	$VolC=new VolC();
	$listeUsers=$VolC->AfficherVol();
?>

<!DOCTYPE html>
<html lang="en">

<body >
      <div class="content" style="margin-left:20%; margin-right:1%;">
        <div class="row" align="center">

        <div class="col-md-4" style="margin-left: 30%; margin-top: 1%;" >
            <div class="card card-user">             
              <div class="card-body">
                <div align="right">
                  <button class="btn btn-warning btn-fab btn-icon btn-round ">
                    <a href="./AfficherVol.php">
                      <i class="now-ui-icons ui-1_simple-remove" ></i> 
                    </a>   
                  </button>
                </div>
                <div class="author">
                  
                    <img class="avatar border-gray " src="../back/assets/img/vol1.jpg" alt="...">
                    
                  
                  <p class="description">
                    
                  </p>
                </div>
               
                <form method="GET" action="DetailsVol.php" >
                 <div class="form-group" >
                       <label><strong>	inserer référence du vol : </strong></label>
                        <input class="form-control" type="text" name="id_vol">
                      
                  </div>
                     <div class="form-group" align="center " >
                       <button class="btn btn-warning  btn-icon btn-round " >                       
                         <i class="now-ui-icons ui-1_zoom-bold" ></i> 
                          </button>
			                 </div>	
              	</form>			           
              </div>
            </div>
          </div>
          <div class="col-md-12" style=" margin-top: 2%;">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" align="center"> Liste Des Vols</h4>
                <div align="right">
                <button class="btn btn-warning btn-fab  btn-round ">
                   <a href="./TriVol.php">
                     <i class="" >Trier</i> 
                   </a>   
                 </button>
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./formulairerecherche.php">
                     <i class="now-ui-icons ui-1_zoom-bold" ></i> 
                   </a>   
                 </button>
                 <button class="btn btn-warning btn-fab btn-icon btn-round " >
                            <a href="./AjouterVol.php">
                              <i class="now-ui-icons ui-1_simple-add" ></i> 
                            </a>   
                          </button>
              </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      <strong>Référence</strong>
                      </th>
                      <th>
                      <strong>Compagnie</strong>
                      </th>
                      <th>
                      <strong>Ville de départ</strong>
                      </th>
                      <th>
                      <strong>Ville d'arrivée</strong>
                      </th>
                      <th><strong>Prix</strong></th>
                      <th></th>
                      <th class="text-center" >
                      <strong>Action</strong>
                      </th>
                      <th>
                      </th>
                    </thead>
                    <tbody>

                    <?PHP
                        foreach($listeUsers as $user){		
                      ?>
                        <tr>
                          <td><?PHP echo $user['id_vol']; ?></td>
                          <td><?PHP echo $user['compagnie']; ?></td>
                          <td><?PHP echo $user['ville_depart']; ?></td>
                          <td> <?PHP echo $user['ville']; ?>
                          </td>
                          <td><?PHP echo $user['prix']; ?> DT</td>
                          <td>
                            <form method="GET" action="DetailsVol.php">
                            <input class="btn btn-info btn-round" type="submit" name="détails" value="détails">
                            <input type="hidden" value=<?PHP echo $user['id_vol']; ?> name="id_vol">
                            </form>
                          </td>                                                      
                          <td>
                          <button class="btn btn-warning btn-round">
                            <a href="./ModifierVol.php?id_vol=<?PHP echo $user['id_vol']; ?>"> Modifier</a>
                            </button>
                          </td>
                          <td>
                         
                            <form method="POST" action="SupprimerVol.php">
                            <input class="btn btn-danger btn-round" type="submit" name="supprimer" value="supprimer">
                            <input type="hidden" value=<?PHP echo $user['id_vol']; ?> name="id_vol">
                            </form>
                          
                          </td>
                        </tr>
                      <?PHP
                    }
                  ?>
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
      <?php
  include "./footer.php";
 ?>
 
  

</body>

</html>