	    <!-- Button to trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ajouter event</button>

                               <script src="control.js"></script> 
                          <form name="form"  method="POST" action="ajouterevent.php "  onsubmit ="return validateForm()">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">ajouter event</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">


<div class="form-group">
<label for="nom" class="col-form-label">nom:</label>
<input  name="nom" id="nom" placeholder="nom"
"  class="form-control" >
</div>
<div class="form-group">
<label for="date_event" class="col-form-label">date event:</label>
<input  name="date_events" id="date_events" placeholder="date event"  class="form-control" >
</div>
<div class="form-group">
<label for="description" class="col-form-label">description:</label>
<input  type="text" name="description" id="description" placeholder="description"  class="form-control" >
</div>
<div class="form-group">
<label for="emplacement" class="col-form-label">emplacement:</label>
<input  type="emplacement" name="emplacement" id="emplacement" placeholder="emplacement"  class="form-control">
</div>


</div>
<div class="modal-footer">
<button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name = "submit"  class="btn btn-primary">ajouter</button>

</div>
</div>
</div>

</div>
</form>




	

					</form>
    </div>			