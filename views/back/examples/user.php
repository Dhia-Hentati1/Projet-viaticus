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

<body class="user-profile">
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
            <a href="./table2.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Cartes</p>
            </a>
          </li>
          <li>
            <a href="gestionTransport.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Ajouter une carte </p>
            </a>
          </li>
          <li class="active ">
            <a href="user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Ajouter un utilisateur</p>
            </a>
          </li>
          <li>
            <a href="tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>UTILISATEURS</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
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
      <?php include("../navbar.php"); ?>

      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
                    <div class="card-header">
                        <h5 class="title">Créer un compte</h5>
                    </div>
              <div class="card-body">
                <form action="ajouterutilisateur.php" method="POST" >
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>CIN</label>
                        <input type="text" name="cin" class="form-control" placeholder="cin">
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="nom" >
                      </div>
                    </div>
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>prenom</label>
                        <input type="text" name="prenom" class="form-control" placeholder="prenom" >
                      </div>
                    </div>

                  </div>

                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>email</label>
                                <input type="text" name="email" class="form-control" placeholder="email" pattern=".+@gmail.com|.+@esprit.tn">
                            </div>
                        </div>

                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>login</label>
                                <input type="text" name="login" class="form-control" placeholder="login">
                            </div>
                        </div>


                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                        </div>

                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>ville</label>
                                <input type="text" name="ville" class="form-control" placeholder="ville">
                            </div>
                        </div>

                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label>tel</label>
                                <input type="text" name="tel" class="form-control" placeholder="tel">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">envoyer</button>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">annuler</button>
                            </fieldset>
                        </div>

                        <a href="tables.php">Retour à la liste</a>
                    </div>

                </form>
              </div>
            </div>


              </div>

          </div>
          <br>

          <div class="col-md-8">
              <div class="card"
                <div class="col-md-8">
                  <div class="card card-plain">
                      <div class="card-body">
                          <div class="card-header">
                              <h5 class="title">Ajouter une carte</h5>
                          </div>
                          <form action="../ajoutercarte.php" method="POST" >
                              <div class="row">
                                  <div class="col-md-5 pr-1">
                                      <div class="form-group">
                                          <label>CIN</label>
                                          <input type="text" name="cin" class="form-control" placeholder="cin">
                                      </div>
                                  </div>

                                  <div class="col-md-3 pr-1">
                                      <div class="form-group">
                                          <label>nombre de points</label>
                                          <input type="text" name="pts" class="form-control" placeholder="nombre de points">
                                      </div>
                                  </div>

                                  <div class="col-lg-12">
                                      <fieldset>
                                          <button type="submit" id="form-submit" class="main-button-icon">ajouter</button>
                                      </fieldset>
                                  </div>

                                  <div class="col-lg-12">
                                      <fieldset>
                                          <button type="submit" id="form-submit" class="main-button-icon">annuler</button>
                                      </fieldset>
                                  </div>

                                  <a href="tables.php">Retour à la liste</a>




                              </div>

                          </form>
                      </div>

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