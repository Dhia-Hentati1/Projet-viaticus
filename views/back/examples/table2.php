<?PHP
include_once 'C:/wamp64/www/projet/controller/UtilisateurC.php';
include_once 'C:/wamp64/www/projet/model/utilisateur.php';

$utilisateurC=new UtilisateurC();
$listeUsers=$utilisateurC->afficherutilisateur();
$carteC=new CarteC();
$listeCarts=$carteC->affichercarte();

?>

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
                <li  class="active ">
                    <a href="./table2.php">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Cartes</p>
                    </a>
                </li>
                <li>
                    <a href="gestionTransport.php">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Ajouter une carte</p>
                    </a>
                </li>
                <li>
                    <a href="./user.php">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Ajouter un utilisateur</p>
                    </a>
                </li>
                <li>
                    <a href="tables.php">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>utilisateurs</p>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="card-title"> Liste des cartes</h4>
                                    <button><a href="gestionTransport.php">Ajouter une carte</a></button>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                            <th>
                                                CIN
                                            </th>
                                            <th>
                                                nombre de points
                                            </th>

                                            </thead>

                                            <?PHP
                                            foreach($listeCarts as $cart){
                                                ?>
                                                <tr>
                                                    <td><?PHP echo $cart['cin']; ?></td>
                                                    <td><?PHP echo $cart['pts']; ?></td>
                                                    <td>
                                                        <a href="../supprimercarte.php?id=<?PHP echo $cart['cin']; ?>"> supprimer </a>
                                                    </td>
                                                    <td>
                                                        <a href="modifiercarte.php?cin=<?PHP echo $cart['cin']; ?>"> Modifier </a>
                                                    </td>
                                                </tr>
                                                <?PHP
                                            }
                                            ?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h4 class="card-title"> Table on Plain Background</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">

                                    <div class="col-md-12">

                                            <div class="card-header">
                                                <h4 class="card-title"> Liste des cartes</h4>
                                                <button><a href="gestionTransport.php">Ajouter une carte</a></button>

                                            </div>
                                            <div class="card-body">

                                                    <table class="table">
                                                        <thead class=" text-primary">
                                                        <th>
                                                            CIN
                                                        </th>
                                                        <th>
                                                            nombre de points
                                                        </th>

                                                        </thead>

                                                        <?PHP
                                                        foreach($listeCarts as $cart){
                                                            ?>
                                                            <tr>
                                                                <td><?PHP echo $cart['cin']; ?></td>
                                                                <td><?PHP echo $cart['pts']; ?></td>
                                                                <td>
                                                                    <a href="../supprimercarte.php?id=<?PHP echo $cart['cin']; ?>"> supprimer </a>
                                                                </td>
                                                                <td>
                                                                    <a href="modifiercarte.php?cin=<?PHP echo $cart['cin']; ?>"> Modifier </a>
                                                                </td>
                                                            </tr>
                                                            <?PHP
                                                        }
                                                        ?>

                                                    </table>
                                            </div>

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