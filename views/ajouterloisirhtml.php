	    <!-- Button to trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ajouter loisir</button>

                               <script src="control.js"></script> 
                          <form name="form"  method="POST" action="ajouterloisir.php "  onsubmit ="return validateForm()">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">ajouter loisir</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">


<div class="form-group">
<label for="categorie" class="col-form-label">categorie:</label>
<input  name="categorie" id="categorie" placeholder="categorie"  class="form-control" >
</div>
<div class="form-group">
<label for="prix" class="col-form-label">prix:</label>
<input  type="text" name="prix" id="prix" placeholder="prix"  class="form-control" >
</div>
<div class="form-group">
<label for="nom_loisir" class="col-form-label">nom loisir:</label>
<input  type="text" name="nom_loisir" id="nom_loisir" placeholder="nom loisir"  class="form-control">
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