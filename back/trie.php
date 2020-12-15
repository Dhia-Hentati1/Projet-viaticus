<?php
include "../controller/locationC.php";
$locationC = new locationC();
$listeLocation = $locationC->afficherLocationtrier();
?>
<table class="table">
    <thead class=" text-primary">
                <th> Id</th>
                <th> Type</th>
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
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
                    </form>
                </td>
                <td>
                    <a href="modifierLocation.php?id=<?PHP echo $row['id']; ?>"> Modifier </a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>