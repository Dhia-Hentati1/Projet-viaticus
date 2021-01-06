<?PHP
	include "../controller/volC.php";
	include "./dashboard.php";
	$VolC=new VolC();
	$listeUsers=$VolC->AfficherVol();

?>

<!DOCTYPE html>
<html lang="en">

<body >
 <div class="content" style="margin-left: 20%; margin-right: 1%; ">
        <div class="row">
          <div class="col-md-12">
            <div class="card" >
              <div class="card-header">
                <h4 class="card-title" align="center"> Liste Des Vols</h4>
                <div align="center">
                <table>
                <th class=" text-primary"> 	inserer référence du vol :</th>
                <th><form method="GET" action="DetailsVol.php" >
                       <div class="input-group"  align="center">
                          <input class="btn  btn-warning btn-outline-warning" type="text" name="id_vol" width="10">
                          <div class="input-group-append ">
                          <button class="btn btn-warning  btn-icon btn-round " >                       
                          <i class="now-ui-icons ui-1_zoom-bold" ></i> 
                            </button>
                          </div>
                        </div>	
                  </form></th>
                </table>
                </div>
                  <div align="right">  
                  <table>
                  <th><form method="GET" action="triVol.php" >
                    <div class="input-group  ">
                      <select class="btn  btn-warning btn-outline-warning " name="tri" id="tri" >
                              <option value="compagnie">compagnie</option>
                              <option value="prix">prix </option>
                              <option value="ville_depart" > ville_depart </option>
                              <option value="ville_arrivee"> ville_arrivee </option>
                      </select> 
                     
                      <div class="input-group-append ">
                      <button class="btn btn-warning btn-round now-ui-icons ">
                      <a href="./AfficherVolR.php">
                        <i class="now-ui-icons " >Trier</i> 
                      </a>   
                      </button>   
                      </div>
                    </div>
                  </form> </th>
                    <th>                            
                      <button class="btn btn-warning btn-fab btn-icon btn-round " >
                          <a href="./AjouterVol.php">
                            <i class="now-ui-icons ui-1_simple-add" ></i> 
                          </a>   
                      </button>    
                      </th>
                      </table>
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
                          <td><?PHP echo $user['ville']; ?>
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
</body>

</html>