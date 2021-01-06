<?php


class config1
{
    private static $pdo = NULL;

    public static function getConnexion() {
        if (!isset(self::$pdo)) {
            try{
                self::$pdo = new PDO('mysql:host=localhost;dbname=rip', 'root', '',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]);

            }catch(Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        return self::$pdo;
    }
}

?>

<?php


class paiement
{
 public $Id = null;
 public $name = null;
 public $cin = null;
 public $email = null;
 public $phone = null;
 public $date = null;
 public $type = null;

    public function __construct($Id, $name, $cin, $email, $phone ,$date, $type )
    {
        $this->Id = $Id;
        $this->name = $name;
        $this->cin = $cin;
        $this->email = $email;
        $this->phone = $phone;
        $this->date = $date;
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->Id = $Id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getCin()
    {
        return $cin->cin;
    }

    /**
     * @param null $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}

?>
<?php


$paiementC =  new paiementC();


class paiementC
{
                
                    

                    function rechercherPaiement($name)
{
    try {
        $db = config1::getConnexion();
        $query = $db->prepare(
            'SELECT * FROM res WHERE name=:name'
        );
        $query->execute([
            'name' => $name
        ]);
        return $query->fetch();
    } catch (Exception $e) {
        $e->getMessage();
    }
}


                      
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
<!--< ?php
require_once 'C:/wamp64/www/projetWeb/back/examples/hotelC.php';

$hotelC =  new hotelC();

?>-->
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
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="active ">
            <a href="./tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./trie.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>trie</p>
            </a>
          </li>
          
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
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
            <a class="navbar-brand" href="#pablo">Table List</a>
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
                <h4 class="card-title"> Liste des reservations</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        date d'allée
                      </th>
                      <th>
                        date d'arrivée
                      </th>
                      <th >
                        nombre de nuits
                      </th>
                      <th >
                        nombre de chambres
                      </th>
                      <th >
                        nombre de personnes
                      </th>
                      <th >
                        nom hotel
                      </th>
                    </thead>
                    
                      <?php
                      $pdo = new PDO('mysql:host=localhost;dbname=rip', 'root', '',);
                    $requete = $pdo->query("SELECT * FROM Rgeneral");
                    ?>
                  
                      
                    <?php
                    while ($resultat = $requete->fetch())
                    {
                      ?>
                      <tr>
                         <td><?php echo $resultat['IdH']; ?></td>
                         <td><?php echo $resultat['dateAL']; ?></td>
                         <td><?php echo $resultat['dateAR']; ?></td>
                         <td><?php echo $resultat['nbN']; ?></td>
                         <td><?php echo $resultat['nbC']; ?></td>
                         <td><?php echo $resultat['nbP']; ?></td>
                         <td><?php echo $resultat['nomH']; ?></td>
                      </tr>   
                    <?php
                    }
                    ?>
                  
                     

                  </table>
                </div>
              </div>
              
              <div class="card-header">
                <h4 class="card-title"> Liste des personnes qui ont payé</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        CIN
                      </th>
                      <th >
                        Email
                      </th>
                      <th >
                        Phone
                      </th>
                      <th >
                        date
                      </th>
                      <th >
                        type
                      </th>
                    </thead>
                    
                      <?php
                      $pdo = new PDO('mysql:host=localhost;dbname=rip', 'root', '',);
                    $requete = $pdo->query("SELECT * FROM RES");
                    ?>
                  
                      
                    <?php
                    while ($resultat = $requete->fetch())
                    {
                      ?>
                      <tr>
                         <td><?php echo $resultat['Id']; ?></td>
                         <td><?php echo $resultat['name']; ?></td>
                         <td><?php echo $resultat['cin']; ?></td>
                         <td><?php echo $resultat['email']; ?></td>
                         <td><?php echo $resultat['phone']; ?></td>
                         <td><?php echo $resultat['date']; ?></td>
                         <td><?php echo $resultat['type']; ?></td>
                      </tr>   
                    <?php
                    }
                    ?>
                  
                     

                  </table>
                </div>
              </div>

            </div>
          </div>

          <section class="container">

<div class="form-container">
    <form action="" method = 'POST' align= "center">
        <div >
            <h2><div >
                <label> Rechercher un hotel </label>
                </div></h2>
            <div >
                <input type = "text" name = 'name'>
            </div>
        </div>
        <br>
        <div >
            <input type = "submit" value = "rechercher" name ="rechercher">
        </div>
    </form>
</div>



<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        CIN
                      </th>
                      <th >
                        Email
                      </th>
                      <th >
                        Phone
                      </th>
                      <th >
                        date
                      </th>
                      <th >
                        type
                      </th>
                    </thead>

                    
<?php
                      $pdo = new PDO('mysql:host=localhost;dbname=rip', 'root', '',);
                    $requete = $pdo->query("SELECT * FROM RES");
                    ?>
<?php

if (isset($_POST['name']) && isset($_POST['rechercher'])){
 
  $resultat = $paiementC->rechercherPaiement($_POST['name']);
 

    if ($resultat !== false) {
        ?>
         <tr>
                         <td><?php echo $resultat['Id']; ?></td>
                         <td><?php echo $resultat['name']; ?></td>
                         <td><?php echo $resultat['cin']; ?></td>
                         <td><?php echo $resultat['email']; ?></td>
                         <td><?php echo $resultat['phone']; ?></td>
                         <td><?php echo $resultat['date']; ?></td>
                         <td><?php echo $resultat['type']; ?></td>
                      </tr>   
        <?php
    }
    else {
        echo "<div> No results found!!! </div>";
    }
}
?>

    
                  
                     

                  </table>
                </div>
              </div>

            </div>
          </div>











          <div class="col-md-12">
            <div class="card card-plain">
              
              <div class="card-body">
                <div class="table-responsive">
                  
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