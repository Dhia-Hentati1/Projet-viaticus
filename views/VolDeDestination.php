<?PHP
	include "../controller/destinationC.php";
  $Ville_arriveeC=new Ville_arriveeC();
	$listeplaces=$Ville_arriveeC->AfficherDestination();
  include "./dashboard.php";
 // like '$id_vol'
?>

<!DOCTYPE html>
<html lang="en">

      <div class="content" style="margin-left: 25%; margin-right: 5%;">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Détails du Vol</h3>
                  <p class="card-category"></p>
                  <div align="left">
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./AfficherDestination.php">
                     <i class="now-ui-icons arrows-1_minimal-left" ></i> 
                   </a>   
                 </button>
              </div>
              
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  
                    <?PHP
                      $count=0;
				            if (isset($_GET['id_destination'])){
                      $listeplaces = $Ville_arriveeC->rechercherDesByville($_GET['id_destination']);
                                           
                               foreach($listeplaces as $place){
				             if($place['id_destination'] === $_GET['id_destination']) {	
                     $count=1;
                     
		            	?>
                  <table class="table">
                    <thead>                     
                      <th>Compagnie</th>                    
                      <th>date Depart</th>
                      <th>date arrivée</th>
                      <th >De</th>
                      <th >à</th>
                      <th >Classe</th>
                      <th >Prix</th>

                      <th class="text-center">Action</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>                     
                      <td class="text-center"><?PHP echo $place['compagnie']; ?></td>
                      <td class="text-center"><?PHP echo $place['date_depart']; ?></td>
                      <td class="text-center"><?PHP echo $place['date_arrivee']; ?></td>
                      <td class="text-center"><?PHP echo $place['ville_depart']; ?></td>
                      <td class="text-center"><?PHP echo $place['ville']; ?></td>
                      <td class="text-center"><?PHP echo $place['classe']; ?></td>
                      <td class="text-center"><?PHP echo $place['prix']; ?> DT</td>
                      <td>
                          <button class="btn btn-warning btn-round">
                            <a href="./ModifierDestination.php?id_destination=<?PHP echo $place['id_destination']; ?>"> Modifier</a>
                            </button>
                          </td>
                          <td>
                         
                            <form method="POST" action="SupDestination.php">
                            <input class="btn btn-danger btn-round" type="submit" name="supprimer" value="supprimer">
                            <input type="hidden" value=<?PHP echo $place['id_destination']; ?> name="id_destination">
                            </form>
                          
                          </td>
                      </tr>
                      
                    </tbody>
                    <?PHP
                          }}}
                        if($count===0)
                        {
                        echo('cette destination ne contient pas de vol' );}
                        
                     ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>