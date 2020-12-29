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
$result = $conn->prepare("SELECT * FROM event where id_event='$ID'");
$result->execute();
//for($i=0; $row = $result->fetch(); $i++){
//$id=$row['id'];
$row = $result->fetch();
?>
<form class="form-horizontal" method="post" action="editpdo.php<?php echo '?id_event='.$ID; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="nom">nom:</label>
                                    <div class="controls">
                                        <input type="text" name="nom" required value=<?php echo $row['nom']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="date_events">date_events:</label>
                                    <div class="controls">
                                        <input type="text" name="date_events" required value=<?php echo $row['date_events']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="description">description:</label>
                                    <div class="controls">
                                        <input type="text" name="description" required value=<?php echo $row['description']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="emplacement">emplacement:</label>
                                    <div class="controls">
                                        <input type="text" name="emplacement" required value=<?php echo $row['emplacement']; ?>>
                                    </div>
                                </div>
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="event.php" class="btn">Back</a>
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