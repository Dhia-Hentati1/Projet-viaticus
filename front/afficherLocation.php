<?php
include_once "../model/location.php";
include_once "../controller/locationC.php";
$locationC = new locationC();
$listeLocation = $locationC->afficherLocation();

?>
<html>
<head>
</head>

<body>
<?php

foreach ($listeLocation as $row)

{
    ?>
    
<div class="item">
                        <div class=''>
                            <div class="price"><h6><?php echo $row['prix'] ?></h6></div>
                            
                        </div>
                    </div>
                    <?php
}
?>
<table>
<tr>
            <td> Id</td>
            <td> Type</td>
            <td> Prix</td>
        </tr>
    <?php

    foreach ($listeLocation as $row)
    
    {
        ?>
        <tr>
            <td> <?php echo $row['id']; ?></td>
            <td> <?php echo $row['type']; ?></td>
            <td> <?php echo $row['prix'] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>