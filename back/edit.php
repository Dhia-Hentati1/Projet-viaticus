<?php 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
include('db.php');
$result = $conn->prepare("SELECT * FROM activite where id='$ID'");
$result->execute();
//for($i=0; $row = $result->fetch(); $i++){
//$id=$row['id'];
$row = $result->fetch();
?>
<form class="form-horizontal" method="post" action="edit_PDO.php<?php echo '?id='.$ID; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="categorie">categorie:</label>
                                    <div class="controls">
                                        <input type="text" name="categorie" required value=<?php echo $row['categorie']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="prix">prix:</label>
                                    <div class="controls">
                                        <input type="text" name="prix" required value=<?php echo $row['prix']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="nom_loisir">nom loisir:</label>
                                    <div class="controls">
                                        <input type="text" name="nom_loisir" required value=<?php echo $row['nom_loisir']; ?>>
                                    </div>
                                </div>
                                
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="activite.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
<?php  ?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
						