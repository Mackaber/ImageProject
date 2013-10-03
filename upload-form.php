  <!-- Modal -->
  <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Upload an image</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="upload.php" enctype="multipart/form-data" class="form-horizontal" role="form">
			  <div class="form-group">
			    <label for="titulo" class="col-lg-2 control-label">Título</label>
			    <div class="col-lg-10">
			      <input type="titulo" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
			    <div class="col-lg-10">
			      <textarea  id="descripcion" name="descripcion" class="form-control" rows="3"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="file" class="col-lg-2 control-label">Archivo</label>
			    <div class="col-lg-10">
			    	<input type="file" id="file" name="userfile">
				</div>
			  </div>

			  <div class="form-group">
			  	<label class="col-lg-2 control-label"></label>
			    <div class="col-lg-10 pull-left">
			      <button type="submit" class="btn btn-default pull-left">Subir</button>
			    </div>
			  </div>

			</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->