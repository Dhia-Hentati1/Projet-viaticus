<?PHP
  include "../controller/destinationC.php";
  include "./header.php";
 
	$Ville_arriveeC=new ville_arriveeC();
	$listeplaces=$Ville_arriveeC->AfficherDestination();

?>
<!DOCTYPE html>
<html lang="en">

<body >
<div class="wrapper ">
      <div class="content" style="margin-left: 25%; position:absolute; z-index:2; margin-top: 7% ;">
        <div class="row">
          <div class="col-md-11" >
            <div class="card">
              <div class="card-header ">                       
              <h4 class="card-title" align="center"> Destination 
                 </h4>             

                 <div align="right">
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./AjouterDestination.php">
                     <i class="now-ui-icons ui-1_simple-add" ></i> 
                   </a>   
                 </button>
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./formulaireDes.php">
                     <i class="now-ui-icons ui-1_zoom-bold" ></i> 
                   </a>   
                 </button>
              </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                      <strong>Ref</strong>
                      </th>
                      <th>
                      <strong>Ville</strong>
                      </th>
                      <th>
                      <strong>Pays</strong>
                      </th>                     
                      <th >
                      <strong > <div align="center" > image </div></strong>
                      </th>
                      <th >
                      <strong > <div align="center" > description </div></strong>
                      </th>
                      <th>
                      </th>
                      <th class="text-right" >
                      <strong>action</strong>
                      </th>
                      <th>
                      </th>
                    </thead>
                    <tbody>

                    <?PHP
                        foreach($listeplaces as $place){		
                      ?>
                        <tr>
                          <td><?PHP echo $place['id_destination']; ?></td>
                          <td><?PHP echo $place['ville']; ?></td>
                          <td><?PHP echo $place['pays']; ?></td>
                          <td><img src="../front/assets/images/<?php echo $place['image'] ?> " height="200" width="250">   </td>
                          <td width="20%"><?PHP echo $place['description']; ?></td>
                          <td>
                            <form method="GET" action="test.php">
                            <input class="btn btn-info btn-round" type="submit" name="détails" value="Vols">
                            <input type="hidden" value=<?PHP echo $place['id_destination']; ?> name="id_destination">
                            </form>
                          </td>                                                      
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
      
    

  <!--   Core JS Files   -->
  <?php
   include "./footer.php";
  ?>
</div>
</body>

</html>