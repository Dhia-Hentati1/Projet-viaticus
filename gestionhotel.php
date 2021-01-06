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
<?php
   
   include '../../../Controller/hotelC.php';

   $error = "";
   $hotelc = new hotelc();
   $listehotel = $hotelc->afficherhotel();
    
    if(
        isset($_POST["nom"])  && 
        isset($_POST["adresse"]) &&
        isset($_POST["categorie"]) && 
        isset($_POST["photo"]) && 
        isset($_POST["prix"]) &&
        isset($_POST["service"])
       
    ) {
        if(
            !empty($_POST["nom"])&& 
            isset($_POST["adresse"]) &&
            isset($_POST["categorie"]) && 
            isset($_POST["photo"]) && 
            isset($_POST["prix"]) &&
            isset($_POST["service"])
        ) {
            $hotel = new hotel(
                $_POST['nom'],
                $_POST['adresse'],
                $_POST['categorie'],
                $_POST['photo'],
                $_POST['prix'],
                $_POST['service']
            );
            $hotelc->ajouterhotel($hotel);
          }
        else
            $error = "Missing information";

            $hotelc->modifierhotel($hotel, $_GET['nom']);
            header('refresh:5;url=afficherhotel.php');
        
        
	
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>²
    Now UI Dashboard by Creative Tim
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
        Viaticus
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
         
          <li>
            <a href="./icons.html">
              <i class="now-ui-icons education_atom"></i>
              <p>utilisateur</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>reservation</p>
            </a>
          </li>
          <li>
            <a href="gestionTransport.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>activites</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>moyen de transport</p>
            </a>
          </li>
          <li class="active ">
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>table hotel</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>vol</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>utilisateur</p>
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
            <a class="navbar-brand" href="#pablo">HOTEL</a>
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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h5 class="title">ajouter hotel</h5>
              </div>
              <head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 </head>
    <body>
       
        <hr>

        <div id = "error">
            <?php echo $error; ?>
        </div>
        <form action = "" method = "POST">
            <table align = "center">
            <tr>
                    <td rowspan='3' colspan='1'></td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">adresse:
                        </label>
                    </td>
                    <td><input type="text" name="adresse" id="adresse" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="categorie">categorie:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="categorie" id="categorie"maxlength="20" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="photo">photo:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="photo" id="photo"maxlength="20" >
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="prix" id="prix" >
                    </td>
                </tr>


                <tr>
                    <td>
                        <label for="service">service:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="service" id="service"maxlength="20" >
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
                    
            </table>
        </form>
    </body>
                
            
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> tableau hotel</h4>
              </div>
             
              <body>

<div align="right" > 

</div>
<hr>
<table border = 3 align = 'center' >
    <tr>
        <th>nom hotel</th>
        <th>adresse hotel</th>
        <th>categorie </th>
        <th>prix </th>
        <th>photo </th>
        <th>Supprimer un hotel</th>
        <th>Modifier un hotel </th>
    </tr>
    <?php
        foreach($listehotel as $hotel) { 
    ?>
        <tr>
            <td>
                <?php echo $hotel['nom'] ?> 
            </td>
            <td>
                <?php echo $hotel['adresse'] ?>
            </td>
            <td>
                <?php echo $hotel['categorie'] ?>
            </td>
            <td>
                <?php echo $hotel['prix'] ?>
            </td>
            <td>
                <?php echo $hotel['photo'] ?>
            </td>
            <td>
                <form method = "POST" action = "supprimerhotel.php">
                    <input type = "submit" name = "supprimer" value = "supprimer">
                    <input type = "hidden" name = "nom" value = "<?php echo $hotel['nom']; ?>">
                </form>
            </td>   
            <td>
                <form method = "GET" action = "modifierhotel.php ">
                    <input type = "submit" name ="modifier" value = "Modifier" >
                    <input type = "hidden" name = "id" value = "<?php echo $hotel['nom']; ?>">
                </form>
            </td> 
        </tr>
    <?php
        } 
    ?>
</table>
<h3><i class="fa fa-angle-right"></i> moyenne des prix </h3>
  <div class="row mt">
  <div class="col-lg-12">
    <div class="form-panel">
     <?php
        $listeprix=$hotelc-> afficherhotel();
            ?>
            <?php
     $nbclients=0;
     $moyenneprix=0;
     foreach ($listeprix as $row)
         {
             $nbclients++;
            
             $moyenneprix+=$row["prix"];
         }
 ?>

 </br>
 <label style="color: black" for="id_avis">moyenne des prix :<h7 style="color:#00CED1"><?php echo $moyenneprix/$nbclients;?></h7> DT </label>
    </div>
  </div>
</div>

      
  <!-- col-lg-12-->
</div>    
</body>









<form  style="  margin-bottom: 15px;  display: inline-flexbox;align-items: center;" method="POST" action="recherchehotel.php" >
                      <fieldset >

                      <div class="form-group">
                  <label style="color: black" for="id">Saisir le nom  de lhotel à rechercher:</label><br>
                  <input class="form-control" type="text" name="nom_loisir_r1" id="nom_loisir_r1" placeholder="nom hotel a rechercher">
                  <input style = "margin-top:10px" type="submit" name="rechercher" value="rechercher"  class="btn btn-primary" >
                </div>
                      </fieldset>
                    </form>



                    <body>

        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		
		




















                    </tbody>
                  </table>
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