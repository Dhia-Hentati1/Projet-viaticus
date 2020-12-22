<?PHP
include_once "../model/moyenTransport.php";
include_once "../controller/moyenTransportC.php";
include_once "../model/location.php";
include_once "../controller/locationC.php";
include "dashbord.php";
?>
<html>
<head>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <link href="assets/css/style.css"/>
</head>
<body>
<div class="content" align="center">
            <nav>
                <ul>
                    <li><a href="#modifier">modifier</a></li>
                </ul>
            </nav>
               
<?php
$moyenC=new moyenTransportC();
$listeMoyens=$moyenC->afficherMoyenTransport();
$error = "";
$moyen1 = null;
$moyen1c = new moyenTransportC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["image"])
){
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["image"])
    )
    {
        $moyen1 = new moyenTransport(

            $_POST['nom'],
            $_POST['prix'],
            $_POST['image']
        );

        $moyen1c->AjouterMoyen($moyen1);
    }
    else echo "missing info";
}
?>
<div class="col-md-8">
<div class="card">
<div class="card-header">
                <h4 class="card-title"> Ajouter moyen transport</h4>
              </div>
    <form method="POST" >
        <table class="table">
            <tr>
        <th><label>Nom</label></th>
        <td><input type="text"  placeholder="nom"  name="nom" id="nom"></td>
            </tr>
            <tr>
        <th><label>Prix</label></th>
        <td><input type="number" placeholder="prix" name="prix" id="prix"></td>
            </tr>
            <tr>
        <th><label>Image</label></th>
        <td><input type="file" name="image" id="image"></td>
            </tr>
            <tr>
        <td><input type="submit" value="envoyer" ></td>
        </tr>
        </table>
    </form>
    </div>
    <form method="post" action="trie.php">
    <input Type="submit" value="trie">
    </form>
    <div class="card">
              <div class="card-header">
                <h4 class="card-title"> afficher moyen transport</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
    <table  class="table" >
    <thead class=" text-primary">
                <th>MATRICULE </th>
                <th>NOM </th>
                <th>PRIX </th>
                <th>IMAGE </th>
                <th>SUPPRIMER</th>
                <th>MODIFIER</th>
        <?PHP
        foreach($listeMoyens as $row){
            ?>
            </thead>
            <tbody>
            <tr>
                <td><?PHP echo $row['matricule']; ?></td>
                <td><?PHP echo $row['nom'];?></td>
                <td><?PHP echo $row['prix'];?></td>
                <td><img src="./assets/img/<?php echo $row['image']?>" width="150" height="150"></td>
                <td>
                    <form method="POST" action="supprimerMoyen.php">
                        <input class="btn btn-danger btn-round btn btn-primary" type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $row['matricule']; ?> name="matricule">
                    </form>
                </td>
                <td>
                    <a href="modifierMoyen.php?matricule=<?PHP echo $row['matricule']; ?>"> Modifier </a>
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
    <?php
    $locationC = new locationC();
    $listeLocation = $locationC->afficherLocation();
    $location1 = null;
    if (
        isset($_POST["id"]) &&
        isset($_POST["type"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["image"]) &&
        isset($_POST["description"])
    ){
    if (
        !empty($_POST["id"]) &&
        !empty($_POST["type"]) &&
        !empty($_POST["prix"]) &&
        !empty($_POST["image"]) &&
        !empty($_POST["description"])
    ){
            $location1 = new location(

                $_POST['id'],
                $_POST['type'],
                $_POST['prix'],
                $_POST['image'],
                $_POST['description']
            );
            $location1c = new locationC();
            $location1c->ajouterLocation($location1);
        }else echo"verifier les champs";
    }
    ?>
    <div class="card">
<div class="card-header">
                <h4 class="card-title"> Ajouter Location</h4>
              </div>
    <form method="POST"  >
        <table>
            <tr>
        <th><label>Id</label></th>
        <td><input type="number"  placeholder="id"  name="id" id="id"></td>
            </tr>
            <tr>
        <th><label>Matricule de moyen de transport</label></th>
        <td><input type="text" placeholder="matricule" name="type" id="type"></td>
            </tr>
            <tr>
        <th><label>Prix</label></th>
        <td><input type="number" placeholder="prix" name="prix" id="prix"></td>
            </tr>
            <tr>
        <th><label>Image</label></th>
        <td><input type="file" placeholder="image" name="image" id="image"></td>
            </tr>
            <tr>
        <th><label>Description</label></th>
        <td><input type="text" placeholder="description" name="description" id="description"></td>
            </tr>
            <tr>
        <td><input type="submit" value="envoyer"></td>
        </tr>
        </table>
    </form>
    </div>
    <div class="card">
              <div class="card-header">
                <h4 class="card-title"> afficher Location</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
    <table class="table">
    <thead class=" text-primary">
                <th> Id</th>
                <th> Matricule de moyen de transport</th>
                <th> Prix</th>
                <th> Image</th>
                <th> Description</th>
                <th> Supprimer</th>
                <th> Modifier</th>
        <?php
        foreach ($listeLocation as $row)
        {
            ?>
            </thead>
            <tbody>
            <tr>
                <td> <?php echo $row['id']; ?></td>
                <td> <?php echo $row['type']; ?></td>
                <td> <?php echo $row['prix'] ?></td>
                <td><img src="./assets/img/<?php echo $row['image']?>" width="150" height="150"></td>
                <td> <?php echo $row['description'] ?></td>
                <td>
                    <form method="POST" action="supprimerLocation.php">
                        <input class="btn btn-danger btn-round" type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
                    </form>
                </td>
                <td>
                <button class="btn btn-warning btn-round" >
                    <a href="modifierLocation.php?id=<?PHP echo $row['id']; ?>"> Modifier </a>
                    </button>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <h2 id"modifier"></h2>
</body>
</html>


