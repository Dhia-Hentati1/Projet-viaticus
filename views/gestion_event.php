
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
          <li class="active ">
            <a href="gestion_des_loisir.php">
              <i class="now-ui-icons education_atom"></i>
              <p>activite</p>
            </a>
          </li>
          <li>
            <a href="event.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>event</p>
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
              <p>Table List</p>
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
            <a class="navbar-brand" href="#pablo">event </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>


          <body>
          
          
              <div class="row-fluid">
                  <div class="span12">
          
          
                   
          
                      <div class="container">
          
          
          







          
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


                <?PHP
                include "../core/eventC.php";
                $event1C=new eventC();
                $listeevent=$event1C-> afficherevent();

                 ?>
                
          

</script>
<?php include('ajouterevent_html.php'); ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css
">
                <table id="datatableid" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
  
  <thead>
      <tr>
          <th style="text-align:center;">ID Event</th>
          <th style="text-align:center;">nom</th>

          <th style="text-align:center;">date event</th>
          <th style="text-align:center;">description</th>
          <th style="text-align:center;">emplacement</th>
          <th style="text-align:center;">Action</th>


      </tr>
  </thead>
  <tbody>
  
                 
                  </tr>

                     <?PHP

                     foreach($listeevent as $row){
                      ?>
                         <tr>
                        <td><?PHP echo $row['id']; ?></td>
                        <td><?PHP echo $row['nom']; ?></td>
                        <td><?PHP echo $row['date_events']; ?></td>
                        <td><?PHP echo $row['description']; ?></td>
                        <td><?PHP echo $row['emplacement']; ?></td>

                        <td style="text-align:center; width:350px;">

         

                        <a href="modifer_event_html.php?id=<?php echo $row['id'];?>"   class="btn btn-primary" >Modifier </a>

                        <script>
                            


                        </script>
                             <a href="supprimerEVENT.php?id=<?php echo $row['id'];?>"   class="btn btn-danger" >supprimer </a>
                          </td>
                          </tr>

   


</div>
</div>
</div>

</div>
</form>









                         <?PHP
                                }
                              ?>
                              </table>
                              <br>
                              <br>

                            





                              <div class="d-grid gap-2 d-md-block">
                            <a href="pdf.php"  >   <input type="submit" name="telecharger" value="télécharger"  class="btn btn-primary" > </a> 
                        
                            <a href="trierevent.php">    <input type="submit" name="trier" value="trier"  class="btn btn-primary"   >           </a> 

                       
</div>







                      <form  style="  margin-bottom: 15px;  display: inline-flexbox;align-items: center;" method="POST" action="rechercheevent.php" >
                      <fieldset >

                      <div class="form-group">
                  <label style="color: black" for="id">Saisir le nom  de levent à rechercher:</label><br>
                  <input class="form-control" type="text" name="nom_event_r1" id="nom_event_r1" placeholder="nom event a rechercher">
                  <input style = "margin-top:10px" type="submit" name="rechercher" value="rechercher"  class="btn btn-primary" >
                </div>
                      </fieldset>
                    </form>

                    
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
<h5>nombre totale des event</h5>

<?php
                $listeevent=$event1C-> afficherevent();
                    ?>
                    <?php
             $nbevent=0;
             foreach ($listeevent as $row)
                 {
                     $nbevent++;
                 }
         ?>

         
         <label style="color: black" >vous avez <h7 style="color:#00CED1"><?php echo $nbevent;?></h7> event </label>
            </div>
          </div>
        </div>  
    </div>
          <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
            
             
       
            
       
            </div>
          </div>
          <!-- col-lg-12-->
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
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
                    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
                        <script>
                        $(document).ready(function() {
    $('#datatableid').DataTable();
} );
</script>



        <!-- scripit init-->

    </body>

</html>



