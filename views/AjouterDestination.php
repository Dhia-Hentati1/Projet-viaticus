<?php
    include_once '../Model/destination.php';
    include_once '../Controller/destinationC.php';
    include "./dashboard.php";
    $error = "";

    // create user
    $place = null;

    // create an instance of the controller
    $placeC = new Ville_arriveeC();
    if (
        isset($_POST["ville"]) &&
        isset($_POST["pays"]) && 
        isset($_POST["image"]) &&
        isset($_POST["description"])           
    ) {
        if (
            !empty($_POST["ville"]) &&
            !empty($_POST["pays"]) &&
            !empty($_POST["image"]) &&
            !empty($_POST["description"])              
        ) {
            $place = new Ville_arrivee(
                $_POST['ville'],
                $_POST['pays'],
                $_POST['image'],  
                $_POST['description'],
                      
            );
            $placeC->AjouterDestination($place);
            //header('Location:AfficherDestination.php');
        }
        else
            $error = "Missing information";
    }
 

    
?>

<!DOCTYPE html>
<html lang="en">

<body >

      <div class="content" style="margin-left: 30%; margin-right: 15%;">
        <div class="row">
          <div class="col-md-12" >
          
            <div class="card">
            
              <div class="card-header">
                <h5 class="title" align="center">Ajouter destination</h5>

                <div align="left">
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./AfficherDestination.php">
                     <i class="now-ui-icons arrows-1_minimal-left" ></i> 
                   </a>   
                 </button>
              </div>
              <div class="card-body">
                <form action="" method="POST" >

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Ref  (disabled)</label>
                        <input type="number" class="form-control" disabled="" placeholder="" name="id_destination" id="id_destination">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Ville</label>
                        <input type="text" class="form-control" placeholder="Username" name="ville" id="ville" required>
                      </div>
                    </div>                   
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Pays</label>
                        <input type="text" class="form-control" name="pays" id="pays" required>
                        <span class="validity"></span>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="">                    
                        <label>image</label>
                        <input type="file"  name="image" id="image" accept=".png, .jpg, .jpeg" value="image" required>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"  rows="3" id="description"  required></textarea>
                      </div>
                      
                    </div>
                  </div>                                                                                
                  <div class="form-group">
                    <div style="text-align:center" data-align="center" >
                    <input  id="submit" class="btn btn-warning" type="submit" value="Ajouter destination" >  
                    <INPUT TYPE="reset" NAME="reset" VALUE="Effacer" class="btn btn-warning">                 
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
      </div>
   </div> 
   
</body>
</html>