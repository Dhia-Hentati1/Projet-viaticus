<?PHP
	include "../controller/VolC.php";
  include "./dashboard.php";
	$VolC=new VolC();
?>

<!DOCTYPE html>
<html lang="en">

<body>
  
      <div class="content" style="margin-left: 35%;  margin-right: 15%;  ;">
        <div class="row">
          <div class="col-md-12" >
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Détails du Vol</h3>
                  <div align="left">
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./AfficherVol.php">
                     <i class="now-ui-icons arrows-1_minimal-left" ></i> 
                   </a>   
                 </button>
              </div>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">

                  <?PHP
				            if (isset($_GET['id_vol'])){
				            	$user = $VolC->rechercherVolByid($_GET['id_vol']);
                      if($user) {
                      
		            	?>

                    <thead>
                      <th></th>
                      <th></th>
                      <th class="text-center">Valeurs</th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>Référence</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['id_vol']; ?></td>
                        
                      </tr>
                      <tr>
                        <td>Compagnie</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['compagnie']; ?></td>
                        
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['Email']; ?></td>
                        
                      </tr>
                      <tr>
                        <td>Dates de départ</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['date_depart']; ?></td>                       
                      </tr>
                      <tr>
                        <td>Date d'arrivée</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['date_arrivee']; ?></td>                        
                      </tr>
                      <tr>
                        <td>Ville de départ</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['ville_depart']; ?></td>                       
                      </tr>
                      <tr>
                        <td>Ville d'arrivée</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['ville']; ?></td>                        
                      </tr>
                      <tr>
                        <td>Heure d'arrivée</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['heure_depart']; ?></td>
                      </tr>
                      <tr>
                        <td>Heure de départ</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['heure_arrivee']; ?></td>                        
                      </tr>
                     
                      <tr>
                        <td >Classe</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['classe']; ?></td>
                      </tr>
                      <tr>
                        <td >Prix</td>
                        <td></td>
                        <td class="text-center"><?PHP echo $user['prix']; ?> DT</td>
                      </tr>
                      
                      <tr>
                        <td class="text-center"></td>
                        
                        <td class="text-center">
                          <a target="_blank" href="AfficherVol.php" class="btn btn-round btn-primary text-center">Retour à la liste des Vols</a>
                        </td>
                      </tr>
                    </tbody>
                    <?PHP
                          }
                          else 
                          {
                            echo('Ce identifiant du vol ( '. $_GET['id_vol'] .')   est non existant' );
                          }
                        }
                     ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
</body>
</html>