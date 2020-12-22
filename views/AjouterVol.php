<?php
    include_once '../Model/Vol.php';
    include_once '../Controller/VolC.php';
    include "./dashboard.php";
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

      <div class="content"  style="margin-left: 25%; position:absolute; z-index:2; margin-top: 7% ;">
        <div class="row">
          <div class="col-md-11" style="margin-left: 30%;">
            <div class="card">
              <div class="card-header">
                <h5 class="title" align="center">Ajouter un vol</h5>
                <div align="left">
                 <button class="btn btn-warning btn-fab btn-icon btn-round ">
                   <a href="./AfficherVol.php">
                     <i class="now-ui-icons arrows-1_minimal-left" ></i> 
                   </a>   
                 </button>
              </div>
              </div>
              <div id="erreur"></div>
              <div class="card-body">
                <form action="" method="POST" onsubmit="return verif()">
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>reférence  (disabled)</label>
                        <input type="number" class="form-control" disabled="" placeholder="" name="id_vol" id="id_vol">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>compagnie</label>
                        <input type="text" class="form-control" placeholder="Username" name="compagnie" id="compagnie" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="Email" id="Email" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>date de depart</label>
                        <input type="date" class="form-control" name="date_depart" id="date_depart" >
                        <span class="validity"></span>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>date d'arrivée</label>
                        <input type="date" class="form-control" name="date_arrivee" id="date_arrivee" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>heure de depart</label>
                        <input type="time" class="form-control" name="heure_depart" id="heure_depart" >
                        <span class="validity"></span>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>heure d'arrivée</label>
                        <input type="time" class="form-control" name="heure_arrivee" id="heure_arrivee" >
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>ville de depart</label>
                        <input type="text" class="form-control" name="ville_depart" id="ville_depart">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Destination</label>
                        <input type="text" class="form-control" name="ville_arrivee" id="ville_arrivee" >
                      </div>
                    </div>
                  </div>                 
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Classe</label>
                        <select class="form-control" name="classe" id="classe">
                          <option value="">  </option>
                          <option value="Economique"> économique </option>
                          <option value="Premiere classe" > Première classe </option>
                          <option value="classe affaires"> classe affaires </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Prix</label>
                        <input type="float" class="form-control" name="prix" id="prix">
                      </div>
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <div style="text-align:center" data-align="center" >
                    <input  id="submit" class="btn btn-warning" type="submit" value="Ajouter" >
                    
                    </div>
                  </div>
                  
                </form>
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