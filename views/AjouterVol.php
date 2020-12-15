<?php
    include_once '../Model/Vol.php';
    include_once '../Controller/VolC.php';
    
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

<body class="user-profile">
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
          
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
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
      <div class="panel-header panel-header-sm">
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto" >
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
   </div> 
</body>
     
    
  <!--   Core JS Files   -->
  <script src="../back/assets/js/core/jquery.min.js"></script>
  <script src="../back/assets/js/core/popper.min.js"></script>
  <script src="../back/assets/js/core/bootstrap.min.js"></script>
  <script src="../back/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../back/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../back/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../back/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../back/assets/demo/demo.js"></script>
</html>