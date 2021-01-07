<?php
include "paiement.php";
include "paiementC.php";
?>
<html>
    <head>
        <title>tuto</title>
    </head>

    <body>

        <form action="" method="POST">
             
                       
                        <input name="name" type="text" id="name" placeholder="name*" required="">
                            
                        <input name="cin" type="text" id="cin" placeholder="cin*" required="">
                           
                        <input name="email" type="text" id="email"  placeholder="email" required="">

                        <input name="phone" type="text" id="phone" placeholder="id*" >

                        <input name="date" type="text" id="date" placeholder="dd/mm/yyyy" >
                            
                        <input name="type" type="text" id="type" placeholder="type*" >

                        
                         
                        <input type="submit" value="ok"/>
                        
                        </form>
                    
                <?php
                $pdo = new PDO('mysql:host=localhost;dbname=rip', 'root', '',);

                if ( isset($_POST['name'] ) AND isset($_POST['cin']) AND isset($_POST['email'] ) AND isset($_POST['phone'] ) AND isset($_POST['date'] ) AND isset($_POST['type'] )) 

                {
                    $requete = $pdo->prepare("INSERT INTO res   (name,cin,email,phone, date, type ) VALUES(?,?,?,?,?,?)");
                    $requete->execute(array($_POST['name'],$_POST['cin'],$_POST['email'],$_POST['phone'],$_POST['date'],$_POST['type']));
                ?>
                <?php
                }
                ?>
                
                        
                    
            </body>
            </html>
            
        


			<?php
        foreach ($listePaiement as $row)
        {
            ?>
            
            
	            <tr>
                <td> <?php echo $row['Id']; ?></td>
				<td> <?php echo $row['name']; ?></td>
				<td> <?php echo $row['cin']; ?></td>
				<td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
                <td> <?php echo $row['date'] ?></td>
				<td> <?php echo $row['type']; ?></td>
                
                <!--<td>
                    <form method="POST" action="supprimerLocation.php">
                        <input class="btn btn-danger btn-round" type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=< ?PHP echo $row['id']; ?> name="id">
                    </form>
                </td>-->
                <td>
                <button class="btn btn-warning btn-round" >
                    <a href="modifierPaiement.php?Id=<?PHP echo $row['Id']; ?>"> Modifier </a>
                    </button>
                </td>
            </tr>
            <?php
        }
        ?>





