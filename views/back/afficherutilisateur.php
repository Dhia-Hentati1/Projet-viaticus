<?PHP
include_once 'C:/wamp64/www/projet/controller/UtilisateurC.php';
include_once 'C:/wamp64/www/projet/model/utilisateur.php';

$utilisateurC=new UtilisateurC();
$listeUsers=$utilisateurC->afficherutilisateur();

?>

<html>
<head>
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
</head>
<body>

<hr>
<table border=1 align = 'center'>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <th>
                    CIN
                </th>
                <th>
                    nom
                </th>
                <th>
                    prenom
                </th>
                <th>
                    email
                </th>
                <th>
                    login
                </th>
                <th>
                    ville
                </th>
                <th>
                    tel
                </th>
                <th>
                    role
                </th>
                </thead>
                <tbody>

                <?PHP
                foreach($listeUsers as $user){
                    ?>
                    <tr>
                        <td><?PHP echo $user['cin']; ?></td>
                        <td><?PHP echo $user['nom']; ?></td>
                        <td><?PHP echo $user['prenom']; ?></td>
                        <td><?PHP echo $user['email']; ?></td>
                        <td><?PHP echo $user['login']; ?></td>
                        <td><?PHP echo $user['ville']; ?></td>
                        <td><?PHP echo $user['tel']; ?></td>
                        <td><?PHP echo $user['role']; ?></td>
                        <td>
                            <a href="supprimerutilisateur.php?id=<?PHP echo $user['cin']; ?>"> supprimer </a>
                        </td>
                        <td>
                            <a href="modifierutilisateur.php?id=<?PHP echo $user['cin']; ?>"> Modifier </a>
                        </td>
                    </tr>
                    <?PHP
                }
                ?>
                </tbody>
            </table>
        </div>


</table>
</body>
</html>
