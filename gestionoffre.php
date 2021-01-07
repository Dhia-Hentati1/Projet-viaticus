
<?php
   
   include_once '../../../Controller/offreC.php';
  
   $error = "";
   $offreC = new offreC();
   $listeoffre = $offreC->afficheroffre();
   if(
       isset($_POST["id"]) &&
       isset($_POST["type"]) &&
       isset($_POST["idc"])
   ) {
       if(  
           !empty($_POST["id"])&&
           !empty($_POST["type"])&&
           !empty($_POST["idc"])
       ) {
           $offre = new offre(
               $_POST['id'],
               $_POST['type'],
               $_POST['idc']
           );
           $offreC->ajouterOffre($offre);
           header('Location:afficherOffre.php');
       }
       else
           $error = "Missing information";
   }
?>





<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    tableau offre
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="gestionTransport.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table hotel</p>
            </a>
          </li>
          <li class="active ">
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>tableau offre</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
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
            <a class="navbar-brand" href="#pablo">offre</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">tableau offre</h5>
              </div>
   

              <body>
        
        <hr>

        <div id = "error">
            <?php echo $error; ?>
        </div>
        <form action = "" method = "POST">
            <table align = "center">
            <tr>
                   
                        <label for="id">id offre</label>
                        <input type="number" name="id" id="id" >
                    
                </tr>
                <tr>
                    <label for = "type">Choisir type Offre </label>
                    <select name = "type" id = "type">
                        <option value = "remis">remis</option>
                        <option value = "hotel du mois">hotel du mois</option>
                        
                    </select>
                </tr>
                <tr>
                    <label for = "idc">Donner votre ID</label>
                    <input type = "number" name = "idc" id = "idc">
                    <input type = "submit" value = "Envoyer">
                </tr>
            </table>
        </form>
    </body>



    <body>
        <div align="right">
        
        </div>
        
        <hr>
        <table border = 1 align = 'center'>
            <tr>
                <th>ID offre</th>
                <th>Type d'offre</th>
                <th>ID Client</th>
                <th>Supprimer une Offre</th>
                <th>Modifier une offre </th>
            </tr>
            <?php
              foreach($listeoffre as $offre) { 
              ?>
                <tr>
                    <td>
                        <?php echo $offre['id'] ?> 
                    </td>
                    <td>
                        <?php echo $offre['type'] ?>
                    </td>
                    <td>
                        <?php echo $offre['idc'] ?>
                    </td>
                    <td>
                        <form method = "POST" action = "supprimerOffre.php">
                            <input type = "submit" name = "supprimer" value = "supprimer">
                            <input type = "hidden" name = "id" value = "<?php echo $offre['id']; ?>">
                        </form>
                    </td>   
                    <td>
                        <form method = "GET" action = "modifierOffre.php ">
                            <input type = "submit" name ="modifier" value = "Modifier" >
                            <input type = "hidden" name = "id" value = "<?php echo $offre['id']; ?>">
                        </form>
                    </td> 
                </tr>
                <?php
                } 
            ?>
        </table>    
    </body>




    <form  style="  margin-bottom: 15px;  display: inline-flexbox;align-items: center;" method="POST" action="recherchehotel.php" >
                      <fieldset >

                      <div class="form-group">
                  <label style="color: black" for="id">Saisir l id d offre à rechercher:</label><br>
                  <input class="form-control" type="text" name="nom_loisir_r1" id="nom_loisir_r1" placeholder="id offre a rechercher">
                  <input style = "margin-top:10px" type="submit" name="rechercher" value="rechercher"  class="btn btn-primary" >
                </div>
                      </fieldset>
                    </form>



                    <body>

        <hr>
        
        <div id="error">
            <?php echo $error; ?>
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