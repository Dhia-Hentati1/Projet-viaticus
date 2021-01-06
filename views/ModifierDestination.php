<?php
	include "../controller/destinationC.php";
	include_once '../Model/destination.php';
  include "./dashboard.php";
	$Ville_arriveeC = new Ville_arriveeC();
	$error = "";
	
	if (
		    isset($_POST["ville"]) &&
        isset($_POST["pays"]) &&
        isset($_POST["image"]) &&
        isset($_POST["description"]) 
	){
		if (
            
            !empty($_POST["ville"]) &&
            !empty($_POST["pays"]) &&
            !empty($_POST["image"]) &&
            !empty($_POST["description"]) 
        ) {
            $place = new ville_arrivee(
                $_POST['ville'],
                $_POST['pays'],
                $_POST['image'],
                $_POST['description']
			);
			
            $Ville_arriveeC->ModifierDestination($place, $_GET['id_destination']);
            //header('Location:AfficherDestination.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html lang="en">

<body>
      <div class="content" style="margin-left: 25%; margin-right: 15%;">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card " >
              <div class="card-header text-center">
              Modifier destination
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
                  
                       
                        <div>
                      <?php
                         $rech="";
                        if (isset($_GET['id_destination'])){
                        $place = $Ville_arriveeC->RecupererDestination($_GET['id_destination']);
                      ?>
                        </div>
                      <form action="" method="POST" >
                        <table class="table">
                        
                          <tbody>
                            <tr>
                            <div id_destination="error">
                          <?php echo $error; ?>
                           </div>
                           </tr>
                            <tr>
                              <td>Référence :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" class="text-center form-control" name="id_destination" id="id_destination"  value = "<?php echo $place['id_destination']; ?>" disabled>
                              </td>
                            </tr>
                            <tr>
                              <td>Ville :</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" id="ville" class="text-center form-control" name="ville" value = "<?php echo $place['ville']; ?>" required></td>
                            </tr>
                            <tr>
                              <td>Pays:</td>
                              <td class="text-center"></td>
                              <td class="text-center"><input type="text" id="pays" class="text-center form-control" name="pays"   value = "<?php echo $place['pays']; ?>" required></td>
                            </tr>
                            <tr>
                              <td>Image :</td>
                              <td class="text-center"></td>
                              <td class="text-center">
                                  <div class="col-md-6 pl-1">                                                                                     
                                  <input type="file"  name="image" id="image" accept=".png, .jpg, .jpeg" value="<?php echo $place['image']; ?>" onchange="document.getElementById('input_text_file').textContent = this.value" />                                 
                                  <label for="image" type="text"></label> <span id="input_text_file"></span>                                  
                                  </div>                                  
                                    </td>
                            </tr>  
                            <tr>
                              <td>Description:</td>
                              <td class="text-center"></td>
                              <td class="text-center">
                              <textarea class="form-control" name="description"   id="description" value = "<?php echo $place['description']; ?>" required><?php echo $place['description']; ?></textarea>
                              </td>
                            </tr>                                                 
                            <tr>
                              <td class="text-center"></td>
                              <td class="text-center">                                                          
                              </td>
                              
                              <td>
                              <div class="form-group">
                                <div style="text-align:center" data-align="center" >
                                <input type="submit" value="Modifier" class="btn btn-warning" name = "modifier"> 
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
      
    </div>
  </div>
</body>
</html>