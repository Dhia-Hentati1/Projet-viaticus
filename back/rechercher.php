<?php
include "../controller/locationC.php";
if(isset($_POST['type']))
{
    $location = $_POST['type'];
    $locationC=new locationC();
    $listeLocation=$locationC->rechercherLocation($location);
} else echo "messing info";
?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Afficher Liste Albums </title>
</head>
<body>
<table>
<table class="table">
    <thead class=" text-primary">
                <th> Id</th>
                <th> Type</th>
                <th> Prix</th>
                <th> Image</th>
                <th> Description</th>
            </thead>
            <tbody>
            <tr>
                <td> <?php echo $listeLocation['id']; ?></td>
                <td> <?php echo $listeLocation['type']; ?></td>
                <td> <?php echo $listeLocation['prix'] ?></td>
                <td><img src="./assets/img/<?php echo $listeLocation['image']?>" width="150" height="150"></td>
                <td> <?php echo $listeLocation['description'] ?></td>
            </tr>
        </tbody>
    </table>
</html>