<?php
	include "../controller/volC.php";
	include_once '../Model/vol.php';
  include "./dashboard.php";
  $VolC = new VolC();
  $listedes=$VolC->AficherVol();
  
	$error = "";
	
	if (
		    isset($_POST["compagnie"]) &&
        isset($_POST["Email"]) &&
        isset($_POST["date_depart"]) && 
        isset($_POST["date_arrivee"]) && 
        isset($_POST["heure_depart"]) && 
        isset($_POST["heure_arrivee"]) &&
        isset($_POST["ville_depart"]) && 
        isset($_POST["ville_arrivee"]) && 
        isset($_POST["classe"]) &&
        isset($_POST["prix"]) 
	){
		if (
            
            !empty($_POST["compagnie"]) &&
            !empty($_POST["Email"]) &&
            !empty($_POST["date_depart"]) && 
            !empty($_POST["date_arrivee"]) &&
            !empty($_POST["heure_depart"]) && 
            !empty($_POST["heure_arrivee"]) &&
            !empty($_POST["ville_depart"]) && 
            !empty($_POST["ville_arrivee"]) && 
            !empty($_POST["classe"]) &&
            !empty($_POST["prix"])
        ) {
            $user = new Vol(
                $_POST['compagnie'],
                $_POST['Email'],
                $_POST['date_depart'],
                $_POST['date_arrivee'],
                $_POST['heure_depart'],
                $_POST['heure_arrivee'],
                $_POST['ville_depart'],
                $_POST['ville_arrivee'],
                $_POST['classe'],
                $_POST['prix']
			);
			
            $VolC->ModifierVol($user, $_GET['id_vol']);
            //header('Location:AfficherVol.php');
        }
        else
            $error = "Missing information";
	}
?>
<script src="./script.js"></script>
<!DOCTYPE html>
<html lang="en">

<body class="">
  
      <div class="content"  style="margin-left: 35%; margin-right: 15%;">
        <div class="row">
          <div class="col-md-11" >
          <div id="erreur"></div>
            <div class="card">
            
              <div class="card-header text-center">
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
                  
          
                        <div>
                      <?php
                        if (isset($_GET['id_vol'])){
                        $user = $VolC->RecupererVol($_GET['id_vol']);
                      ?>
                        </div>
                      <form action="" method="POST" onsubmit="return verif()">
                        <table class="table">
                        
                          <tbody>
                            <tr>
                            <div id_vol="error">
                          <?php echo $error; ?>
                           </div>
                           </tr>
                            <tr>
                              <td>Référence :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" class="text-center form-control" name="id_vol" id="id_vol"  value = "<?php echo $user['id_vol']; ?>" disabled>
                              </td>
                            </tr>
                            <tr>
                              <td>Compagnie :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" id="compagnie" class="text-center form-control" name="compagnie" value = "<?php echo $user['compagnie']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Email :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" id="Email" class="text-center form-control" name="Email"   value = "<?php echo $user['Email']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Date départ :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="date" id="date_depart" class="text-center form-control" name="date_depart"   value = "<?php echo $user['date_depart']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Date d'arrivée :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="date" id="date_arrivee" class="text-center form-control" name="date_arrivee"   value = "<?php echo $user['date_arrivee']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Heure de départ :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="time" id="heure_depart" class="text-center form-control" name="heure_depart"   value = "<?php echo $user['heure_depart']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Heure d'arrivée :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="time" id="heure_arrivee" class="text-center form-control" name="heure_arrivee"   value = "<?php echo $user['heure_arrivee']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Ville de départ :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" id="ville_depart" class="text-center form-control" name="ville_depart"   value = "<?php echo $user['ville_depart']; ?>"></td>
                            </tr>
                            <tr>
                              <td>Ville d'arrivée :</td>
                              <td class="text-center"></td>
                              <td class="text-center">
                              <select class="form-control" name="ville_arrivee" id="ville_arrivee"  required>
                                <option value="<?php echo $user['ville_arrivee']; ?>"><?php echo $user['ville']; ?></option>
                                  <?PHP
                                    foreach($listedes as $des){	
                                      if( $user['ville']!=$des['ville'])	{
                                  ?>
                                <option value="<?PHP echo $des['id_destination']; ?>"><?PHP echo $des['ville']; ?></option>
                                  <?PHP
                                   }}
                                  ?>
                              </select>
                              </td>
                            </tr>
                            <tr>

                              <td>Classe :</td>
                              <td class="text-center"></td>
                              <td class="text-center">
                              <select class="form-control" name="classe" id="classe" required>
                                <option value= "<?php echo $user['classe']; ?>" > <?php echo $user['classe']; ?> </option>
                                <?php if($user['classe']!="Economique"){?><option value="Economique"> économique </option><?php }?>
                                <?php if($user['classe']!="Premiere classe"){?><option value="Premiere classe" > Première classe </option><?php }?>
                                  <?php if($user['classe']!="classe affaires"){?><option value="classe affaires"> classe affaires </option><?php }?>
                              </select>
                              </td>
                            </tr>
                            <tr>
                              <td>Prix :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="float" class="text-center form-control" name="prix" id="prix"  value = "<?php echo $user['prix']; ?>"></td>
                            </tr>
                            <tr>
                              <td class="text-center"></td>
                              <td class="text-center">                                                          
                              </td>
                              
                              <td>
                              <div class="form-group">
                                <div style="text-align:center" data-align="center" >
                                <input type="submit" value="Modifier" class="btn btn-warning" > 
                                </div>
                                </div>
                              </td>
                            </tr>  
                          </tbody>
                        </table>
                      </form>
                      <?php
                          }
                        ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>