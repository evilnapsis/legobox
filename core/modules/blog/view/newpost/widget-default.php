<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class='glyphicon glyphicon-cog'></i> Opciones</h3>
            </div>
        	<div class="list-group">
					<a href='index.php' class='list-group-item'> Panel de Control</a>
					<a href='index.php?view=users' class='list-group-item'> Usuarios</a>
			</div>
        </div>
	</div>
	<div class="col-md-9">
		<div style="font-size:35px;">Nuevo Articulo</div>

<form class="form-horizontal" method="post" action="index.php?view=addpost" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="title" id="titulo" placeholder="Escribe un titulo" autocomplete="false" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Contenido</label>
    <div class="col-lg-10">
    	<textarea name="content" id="contenido" class="form-control" placeholder="Escriba el contenido de la publicacion." style="height:200px;" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="is_public"> Publicar este articulo
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <input type="hidden" name="view" value="addpost">
      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Finalizar</button>
    </div>
  </div>
</form>
	</div>
</div>