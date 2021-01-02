	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">ajouter</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="ajouterpdo.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">nom</label></td>
							<td width="30"></td>
							<td><input type="text" name="nom" placeholder="nom" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">date_events</label></td>
							<td width="30"></td>
							<td><input type="text" name="date_events" placeholder="date_events" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">description</label></td>
							<td width="30"></td>
							<td><input type="text" name="description" placeholder="description" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">emplacement</label></td>
							<td width="30"></td>
							<td><input type="text" name="emplacement" placeholder="emplacement " required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			