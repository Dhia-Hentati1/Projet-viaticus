<?php
    include_once '../Model/Vol.php';
    include_once '../Controller/VolC.php';
    include "./header.php";
    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new VolC();
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
        
    ) {
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
            $userC->ajouterVol($user);
            //header('Location:AfficherVol.php');
        }
        else
            $error = "Missing information";
    }

    
?>

<!DOCTYPE html>
<html lang="en">

<body class="user-profile">
   

      <div class="content" style="margin-left: 25%; position:absolute; z-index:2; margin-top: 7% ;">
        <div class="row">
          <div class="col-md-11" style="margin-left: 60%;" >
            <div class="card">
              <div class="card-header">
                <h5 class="title" align="center">Formulaire de rechercher du vol</h5>
                <div align="left">
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./AfficherDestination.php">
                     <i class="now-ui-icons arrows-1_minimal-left" ></i> 
                   </a>   
                 </button>
              </div>
              </div>
              <div id="erreur"></div>
              <div class="card-body">
                
                <form method="GET" action="RechercheFormulaire.php" >   
                
                  <div class="row">
                    <div class="col-md-6 pr-1">
                     <div class="form-group">
                        <label>compagnie</label>
                        <input type="text" class="form-control" placeholder="Username" name="compagnie" id="compagnie" required>
                      </div>
                   </div>
                   <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>date de depart prévue</label>
                        <input type="date" class="form-control" name="date_depart" id="date_depart" required>                        
                      </div>
                    </div>                   
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                     <div class="form-group">
                        <label>Destination</label>
                        <input type="text" class="form-control" placeholder="Username" name="ville" id="ville" required>
                      </div>
                   </div>
                   <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>prix maximal</label>
                        <input type="float" class="form-control" name="prix" id="prix" required>                        
                      </div>
                    </div>                   
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Classe</label>
                        <select class="form-control" name="classe" id="classe" required>
                          <option value="">  </option>
                          <option value="Economique"> économique </option>
                          <option value="Premiere classe" > Première classe </option>
                          <option value="classe affaires"> classe affaires </option>
                        </select>
                      </div>
                    </div>
                 </div>
                 
                  
                  <div class="form-group">
                    <div style="text-align:center" data-align="center" >

                    <button class="btn btn-warning   btn-round " >
                        
                         Rechercher vols
                           
                          </button>
                   
                    
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
<?php
   include "./footer.php";
  ?>
</html>