<?PHP
	include "../controller/volC.php";

	$VolC=new VolC();
	$listeUsers=$VolC->AfficherVol();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../back/assets/img/logo.png">
  <link rel="icon" type="image/png" href="../back/assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Viaticus
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
</head>

<body >

<div class="sidebar" data-color="orange"  >
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <img class=" now-ui-icons " src="../back/assets/img/logo.png" alt="..." width="50" align="left"> 
        <a class="simple-text logo-normal" align="center">
          <strong> Viaticus  </strong>
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
<div class="main-panel" id="main-panel" >
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

    <div class="content" >
        <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-header">
                  <h4 class="card-title" align="center"> Liste Des Vols</h4>
                  <div align="center">
                    <table>
                      <th class=" text-primary"> 	inserer référence du vol :</th>
                      <th><form method="GET" action="DetailsVol.php" >
                            <div class="input-group"  align="center">
                                <input class="btn  btn-warning btn-outline-warning" type="text" name="id_vol" width="10">
                                <div class="input-group-append ">
                                <button class="btn btn-warning  btn-icon btn-round " >                       
                                <i class="now-ui-icons ui-1_zoom-bold" ></i> 
                                  </button>
                                </div>
                              </div>	
                        </form></th>
                    </table>
                  </div>
                  <div align="right">  
                    <table>
                      <th>
                        <form method="GET" action="triVol.php" >
                          <div class="input-group  ">
                            <select class="btn  btn-warning btn-outline-warning " name="tri" id="tri" >
                                    <option value="compagnie">compagnie</option>
                                    <option value="prix">prix </option>
                                    <option value="ville_depart" > ville_depart </option>
                                    <option value="ville_arrivee"> ville_arrivee </option>
                            </select> 
                        
                            <div class="input-group-append ">
                              <button class="btn btn-warning btn-round now-ui-icons ">
                                <a href="./AfficherVolR.php">
                                  <i class="now-ui-icons " >Trier</i> 
                                </a>   
                              </button>   
                            </div>
                          </div>
                        </form> 
                      </th>
                      <th>                            
                        <button class="btn btn-warning btn-fab btn-icon btn-round " >
                            <a href="./AjouterVol.php">
                              <i class="now-ui-icons ui-1_simple-add" ></i> 
                            </a>   
                        </button>    
                      </th>
                    </table>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                        <strong>Référence</strong>
                        </th>
                        <th>
                        <strong>Compagnie</strong>
                        </th>
                        <th>
                        <strong>Ville de départ</strong>
                        </th>
                        <th>
                        <strong>Ville d'arrivée</strong>
                        </th>
                        <th><strong>Prix</strong></th>
                        <th></th>
                        <th class="text-center" >
                        <strong>Action</strong>
                        </th>
                        <th>
                        </th>
                      </thead>
                      <tbody>

                        <?PHP
                          foreach($listeUsers as $user){		
                        ?>
                          <tr>
                            <td><?PHP echo $user['id_vol']; ?></td>
                            <td><?PHP echo $user['compagnie']; ?></td>
                            <td><?PHP echo $user['ville_depart']; ?></td>
                            <td><?PHP echo $user['ville']; ?>
                            </td>
                            <td><?PHP echo $user['prix']; ?> DT</td>
                            <td>
                              <form method="GET" action="DetailsVol.php">
                              <input class="btn btn-info btn-round" type="submit" name="détails" value="détails">
                              <input type="hidden" value=<?PHP echo $user['id_vol']; ?> name="id_vol">
                              </form>
                            </td>                                                      
                            <td>
                            <button class="btn btn-warning btn-round">
                              <a href="./ModifierVol.php?id_vol=<?PHP echo $user['id_vol']; ?>"> Modifier</a>
                              </button>
                            </td>
                            <td>
                          
                              <form method="POST" action="SupprimerVol.php">
                              <input class="btn btn-danger btn-round" type="submit" name="supprimer" value="supprimer">
                              <input type="hidden" value=<?PHP echo $user['id_vol']; ?> name="id_vol">
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
    <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
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
  </div>
</html>