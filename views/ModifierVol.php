<?php
	include "../controller/volC.php";
	include_once '../Model/vol.php';

	$VolC = new VolC();
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
            header('Location:AfficherVol.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../back/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../back/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../back/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../back/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../back/assets/demo/demo.css" rel="stylesheet" />
  <script src="./script.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Viaticus
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="./dashboard.html">
                    <i class="now-ui-icons business_bank"></i>
                    <p>Gestion de  hotels</p>
                </a>
            </li>
            <li>
                <a href="./icons.html">
                    <i class="now-ui-icons gestures_tap-01"></i>
                    <p>Réservations</p>
                </a>
            </li>
            <li>
                <a href="./map.html">
                    <i class="now-ui-icons transportation_air-baloon"></i>
                    <p>Activités</p>
                </a>
            </li>
            <li class=" ">
                <a href="examples/gestionTransport.php">
                    <i class="now-ui-icons transportation_bus-front-12"></i>
                    <p>moyen de transport</p>
                </a>
            </li>
            <li>
                <a href="./AfficherVol.php">
                    <i class="now-ui-icons objects_spaceship"></i>
                    <p>Vols</p>
                </a>
            </li>
            <li>
                <a href="./AfficherDestination.php">
                    <i class="now-ui-icons location_pin"></i>
                    <p>Destinations</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Utilisateurs</p>
                </a>
            </li>

        </ul>
    </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
           <div id="erreur"></div>
          <h2 class="title">Modifier Vol</h2>
          <p class="category">Veuillez modifier les détails des vols</p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
          
            <div class="card card-upgrade">
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
                              <td class="text-center"><input type="text" id="ville_arrivee" class="text-center form-control" name="ville_arrivee"   value = "<?php echo $user['ville_arrivee']; ?>"></td>
                            </tr>
                            <tr>

                              <td>Classe :</td>
                              <td class="text-center"></td>
                              <td class="text-center">
                              <select class="form-control" name="classe" id="classe">
                                <option value= "<?php echo $user['classe']; ?>" >  </option>
                                <option value="Economique" selected> économique </option>
                                <option value="Premiere classe" > Première classe </option>
                                <option value="classe affaires"> classe affaires </option>
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
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>